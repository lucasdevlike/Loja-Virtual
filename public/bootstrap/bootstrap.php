<?php

use App\Controllers\Controller;
use App\Controllers\Method;

$controller = new Controller();
$object = $controller->controller();

$method = new Method();
dump($method->method($object));
