<?php

use App\Classes\Template;
use App\Controllers\Controller;
use App\Controllers\Method;

$template = new Template();
$twig = $template->init();

// dump($twig);

/**
 * Chamando o controller digitado na url
 * http://localhost:8000/controller
 */
$callController = new Controller();
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);


/**
 * Chamando o metodo digitado na url
 * http://localhost:8000/controller/method
 */
$callMethod = new Method();
$method = $callMethod->method($controller);

/**
 * Chamando o controller atraves da classe controller e da classe method
 */
$controller->$method();
