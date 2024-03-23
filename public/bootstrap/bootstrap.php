<?php

use App\Controllers\Controller;
use App\Controllers\Method;

$callController = new Controller();
$calledController = $callController->controller();

$controller = new $calledController();

$callMethod = new Method();
$method = $callMethod->method($controller);


$controller->$method();
