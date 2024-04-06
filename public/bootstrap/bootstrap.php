<?php

use App\Classes\Template;
use App\Controllers\Controller;
use App\Controllers\Method;
use App\Classes\Parameters;

$template = new Template();
$twig = $template->init();

//Chamando as funções do functions_Twig
$twig->addFunction($site_url);
$twig->addFunction($categorias);

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
$parameters = new Parameters();
$parameter = $parameters->getParameterMethod($controller, $method);
$controller->$method($parameter);
