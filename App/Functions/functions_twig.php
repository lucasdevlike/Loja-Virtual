<?php

use App\Repositories\Site\CategoriaRepository;

$site_url = new \Twig_SimpleFunction('site_url', function () {
    return 'http://'.$_SERVER['SERVER_NAME'].':8000';
});

//Listar as categorias no left menu
$categorias = new \Twig_SimpleFunction('categorias', function () {
    $categoriaRepository = new CategoriaRepository();

    // dump($categoriaRepository->listarCategoriasProdutos());
    return $categoriaRepository->listarCategoriasProdutos();
});
