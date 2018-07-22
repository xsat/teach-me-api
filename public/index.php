<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once __DIR__ .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . 'vendor' .
    DIRECTORY_SEPARATOR . 'autoload.php';

use Nen\Application;

(new Application(
    include __DIR__ .
        DIRECTORY_SEPARATOR . '..' .
        DIRECTORY_SEPARATOR . 'api' .
        DIRECTORY_SEPARATOR . 'routes.php'
))->run();
