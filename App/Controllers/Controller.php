<?php

namespace App\Controllers;

use App\Classes\Uri;

class Controller
{
    public const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
    public const FOLDERS_CONTROLLER = ['Site', 'Admin'];
    public const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroControler';

    // private $controller;
    private $uri;

    public function __construct()
    {
        $this->uri = new Uri();
    }

    private function getController()
    {
        if (!$this->uri->emptyUri()) {
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));
            return ucfirst($explodeUri[1]).'Controller';
        }

        return ucfirst(DEFAULT_CONTROLLER).'Controller';
    }

    public function controller()
    {
        $controller = $this->getController();

        foreach (self::FOLDERS_CONTROLLER as $folderController) {
            if (class_exists(self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller)) {
                return self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller;
            }
        }
        return self::ERROR_CONTROLLER;
    }
}
