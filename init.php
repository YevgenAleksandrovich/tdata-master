<?php

require __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
	$path = __DIR__ . '/app/src/' . $class_name . '/' . $class_name . '.php';
    include_once $path;
});

Config::init('app/config/config.yml');
$db = Config::get('database');


Debug::dd($db);
