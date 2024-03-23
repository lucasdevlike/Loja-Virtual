<?php

use App\Controllers\Controller;
use App\Controllers\Method;
use App\Controllers\Erro;

$callController = new Controller();
$calledController = $callController->controller();

$controller = new $calledController();

$callMethod = new Method();
$method = $callMethod->method($controller);


$controller->$method();
