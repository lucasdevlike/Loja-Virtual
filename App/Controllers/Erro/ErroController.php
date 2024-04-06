<?php

namespace App\Controllers\Erro;

use App\Controllers\BaseController;

class ErroController extends BaseController
{
    public function index()
    {
        // dump('erro');
        echo '<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>404 - Página não encontrada</title>
        </head>
        <body style="color: #CCD3DB;">
            <img src="../../../public/assets/site/images/404.png">
            <h1 style="color: #666666;">PÁGINA NÃO ENCONTRADA</h1>
        <p style="color: #666666;"> Desculpe, a página que você está procurando não existe. Se você acha que algo está quebrado, relate um problema.</p>
        </body>
        </html>';
    }
}
