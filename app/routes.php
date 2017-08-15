<?php
/**
 * Created by PhpStorm.
 * User: LUCAS
 * Date: 04/08/2017
 * Time: 14:58
 */
//VERIFICA SE QUEM PRETENDE ACESSAR A PARTE ADMINISTRATIVA É UM USUÁRIO AUTENTICADO
//CASO NÃO SEJA, REDIRECIONA O USUÁRIO PARA A TELA DE LOGIN
$router->before('GET|POST', '/admin/.*', function() {
    if (!isset($_SESSION['user'])) {
        header('Location: /admin/');
        exit();
    }
});

//ROTA DA PÁGINA INICIAL
$router->get('/', 'App\Controllers\IndexController@index');

//GRUPO DE ROTAS PARA PARTE ADMINISTRATIVA DO CMS
$router->mount('/admin', function() use ($router) {
    $router->get('/', 'App\Controllers\IndexController@admin');
    $router->get('/dashboard', 'App\Controllers\IndexController@dashboard');
    $router->post('/', 'App\Controllers\UserController@login');
    $router->get('/logout', 'App\Controllers\UserController@logout');

    //ROTAS DE CRUD DE POSTS
    $router->get('/post/new', 'App\Controllers\PostController@new');
    $router->get('/post/manage', 'App\Controllers\PostController@manage');
    $router->post('/post/manage/add', 'App\Controllers\PostController@add');
    $router->get('/post/manage/(\d+)/edit/', 'App\Controllers\PostController@edit');
    $router->post('/post/manage/(\d+)/update', 'App\Controllers\PostController@update');
    $router->get('/post/manage/(\d+)/delete/', 'App\Controllers\PostController@delete');

    //ROTAS DE CRUD DE CATEGORIAS
    $router->get('/category/new', 'App\Controllers\CategoryController@new');
    $router->get('/category/manage', 'App\Controllers\CategoryController@manage');
    $router->post('/category/manage/add', 'App\Controllers\CategoryController@add');
    $router->get('/category/manage/(\d+)/edit/', 'App\Controllers\CategoryController@edit');
    $router->post('/category/manage/(\d+)/update', 'App\Controllers\CategoryController@update');
    $router->get('/category/manage/(\d+)/delete/', 'App\Controllers\CategoryController@delete');

    //ROTAS DE CRUD DE PÁGINAS
    $router->get('/page/new', 'App\Controllers\PageController@new');
    $router->get('/page/manage', 'App\Controllers\PageController@manage');
    $router->post('/page/manage/add', 'App\Controllers\PageController@add');
    $router->get('/page/manage/(\d+)/edit/', 'App\Controllers\PageController@edit');
    $router->post('/page/manage/(\d+)/update', 'App\Controllers\PageController@update');
    $router->get('/page/manage/(\d+)/delete/', 'App\Controllers\PageController@delete');

    //ROTAS DE CRUD DE USUÁRIOS
    $router->get('/user/new', 'App\Controllers\UserController@new');
    $router->get('/user/manage', 'App\Controllers\UserController@manage');
    $router->post('/user/manage/add', 'App\Controllers\UserController@add');
    $router->get('/user/manage/(\d+)/edit/', 'App\Controllers\UserController@edit');
    $router->post('/user/manage/(\d+)/update', 'App\Controllers\UserController@update');
    $router->get('/user/manage/(\d+)/delete/', 'App\Controllers\UserController@delete');
});

//GERENCIAMENTO DE ROTAS DE POSTS E PAGES
$router->get('/(.*)', 'App\Controllers\IndexController@path');

//ROTAS DE ERRO 404
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo '404, route not found!';
});