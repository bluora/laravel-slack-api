#!/usr/bin/env php
<?php

$src_dir = __DIR__.'/../vendor/cleentfaar/slack/src/CL/Slack';

if (!file_exists($src_dir)) {
    echo "`$src_dir` does not exist.\n\nRun `composer install`.\n\n";

    exit(1);
}

$mode = fileperms(__DIR__.'/../src/');

if (!file_exists(__DIR__.'/../src/Payload')) {
    mkdir(__DIR__.'/../src/Payload', $mode, true);
}

if (!file_exists(__DIR__.'/../src/Model')) {
    mkdir(__DIR__.'/../src/Model', $mode, true);
}

foreach (['Payload', 'Model'] as $class_type) {
    $working_path = $src_dir.'/'.$class_type;
    $files = scandir($working_path);

    $class_template = file_get_contents(__DIR__.'/src/'.strtolower($class_type).'.class.template');
    $method_template = file_get_contents(__DIR__.'/src/'.strtolower($class_type).'.method.template');

    foreach ($files as $path) {
        if ($path == '.' || $path == '..') {
            continue;
        }

        if (stripos($path, 'Test') !== false || stripos($path, 'Abstract') !== false || stripos($path, 'Interface') !== false || stripos($path, 'PayloadResponse') !== false) {
            continue;
        }

        $class_methods = '';
        $class_contents = file_get_contents($working_path.'/'.$path);

        $matches= [];
        $methods = preg_match_all("/public function set(.*?)\(/im", $class_contents, $matches);

        foreach ($matches[1] as $method_name) {
            $new_method_name = lcfirst($method_name);
            $method_argument = '$'.$new_method_name;
            $text_method_name = strtolower(implode(' ', preg_split('/(?=[A-Z])/', $new_method_name)));

            $class_methods .= str_replace(['{$method_name}', '{$method_argument}', '{$new_method_name}', '{$text_method_name}'], [$method_name, $method_argument, $new_method_name, $text_method_name], $method_template);
        }

        $class_name = str_replace($class_type, '', pathinfo($path, PATHINFO_FILENAME));

        $file_contents = str_replace(['{$class_type}', '{$class_name}', '{$class_methods}'], [$class_type, $class_name, $class_methods], $class_template);

        file_put_contents(__DIR__.'/../src/'.$class_type.'/'.$class_name.'.php', $file_contents);
    }
}
