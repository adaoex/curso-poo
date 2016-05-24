<?php

define ('APP_PATH', __DIR__ . '/');

include APP_PATH . 'lib/Psr4AutoloaderClass.php';

$loader = new Psr4AutoloaderClass();

$loader->addNamespace('Poo',  APP_PATH . '/src');

$loader->register();