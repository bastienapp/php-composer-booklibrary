<?php

use BookLibrary\Controllers\BookController;

require_once __DIR__ . '/../vendor/autoload.php';

$controller = new BookController();
var_dump($controller->getAll());
