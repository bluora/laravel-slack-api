#!/usr/bin/env php
<?php

$src_dir = __DIR__.'/../vendor/cleentfaar/slack/src/CL/Slack';

if (!file_exists($src_dir)) {
    echo "$src_dir does not exist. Run `composer install`.\n";

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
    $files = scandir($src_dir.'/'.$class_type);

    $class_template = file_get_contents(__DIR__.'/src/'.strtolower($class_type).'.class.template');

    foreach ($files as $path) {
        if ($path == '.' || $path == '..') {
            continue;
        }

        if (stripos($path, 'Test') !== false || stripos($path, 'Abstract') !== false || stripos($path, 'Interface') !== false || stripos($path, 'PayloadResponse') !== false) {
            continue;
        }

        $class_name = str_replace($class_type, '', pathinfo($path, PATHINFO_FILENAME));

        $file_contents = $class_template;
        $file_contents = str_replace(['{$class_type}', '{$class_name}'], [$class_type, $class_name], $file_contents);

        file_put_contents(__DIR__.'/../src/'.$class_type.'/'.$class_name.'.php', $file_contents);
    }
}
