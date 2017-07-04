#!/usr/bin/env php
<?php

$src_dir = __DIR__.'/../vendor/bluora/php-slack-api/src/';

if (!file_exists($src_dir)) {
    echo "`$src_dir` does not exist.\n\nRun `composer install`.\n\n";

    exit(1);
}

$mode = fileperms(__DIR__.'/../src/');

exec('rm -rf '.__DIR__.'/../src/Payload');
exec('rm -rf '.__DIR__.'/../src/Model');

mkdir(__DIR__.'/../src/Payload', $mode, true);
mkdir(__DIR__.'/../src/Model', $mode, true);

$class_template = file_get_contents(__DIR__.'/src/class.template');
$method_template = file_get_contents(__DIR__.'/src/method.template');

foreach (['Payload', 'Model'] as $class_type) {
    $working_path = $src_dir.'/'.$class_type;
    $files = scandir($working_path);

    if ($class_type == 'Payload') {
        $class_contents_template = file_get_contents(__DIR__.'/src/'.strtolower($class_type).'.class.template');
    }

    foreach ($files as $path) {
        if ($path == '.' || $path == '..') {
            continue;
        }

        if (stripos($path, 'Test') !== false || stripos($path, 'Abstract') !== false || stripos($path, 'Interface') !== false) {
            continue;
        }

        $original_class_name = pathinfo($path, PATHINFO_FILENAME);
        $class_aliases = "use CL\\Slack\\$class_type\\$original_class_name as Original$original_class_name;\n";
        $class_methods = '';
        $class_contents = '';

        if (stripos($path, 'PayloadResponse') === false || $class_type == 'Model') {
            $current_class_contents = file_get_contents($working_path.'/'.$path);

            $matches = [];
            $methods = preg_match_all("/public function set(.*?)\(/im", $current_class_contents, $matches);

            foreach ($matches[1] as $method_name) {
                $new_method_name = lcfirst($method_name);
                $method_argument = '$'.$new_method_name;
                $text_method_name = strtolower(implode(' ', preg_split('/(?=[A-Z])/', $new_method_name)));

                $class_methods .= str_replace(['{$method_name}', '{$method_argument}', '{$new_method_name}', '{$text_method_name}'], [$method_name, $method_argument, $new_method_name, $text_method_name], $method_template);
            }

            $class_contents .= $class_methods;
            $class_contents .= str_replace(['{$class_type}', '{$class_name}'], [$class_type, $original_class_name], $class_contents_template);

            if ($class_type == 'Payload') {
                $class_aliases .= "use CL\\Slack\\$class_type\\${original_class_name}Response;\n";
            }
        }

        $file_contents = str_replace(['{$class_aliases}', '{$class_type}', '{$class_name}', '{$class_contents}'], [$class_aliases, $class_type, $original_class_name, $class_contents], $class_template);

        file_put_contents(__DIR__.'/../src/'.$class_type.'/'.$original_class_name.'.php', $file_contents);
    }
}
