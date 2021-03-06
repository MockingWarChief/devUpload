<?php

require_once __DIR__.'/../vendor/autoload.php';

use DevUpload\Router;

$app = new Router();

//Rota index
$app->get('/', function(){
    return \DevUpload\Controller\IndexController::index();
});

$app->post('/cadastraUsuario', function(){
    return \DevUpload\Controller\IndexController::cadastraUsuario();
});

$app->post('/loginUsuario', function(){   
    return \DevUpload\Controller\IndexController::loginUsuario();
});

$app->post('/cadastraPasta', function(){
    return \DevUpload\Controller\HomeController::cadastraPasta();
});

$app->post('/uploadConteudo', function(){
    return \DevUpload\Controller\HomeController::uploadArquivo();
});

$app->post('/alteraDadosPasta', function(){
    return \DevUpload\Controller\HomeController::alteraDadosPasta();
});

$app->post('/excluiPasta', function(){
    return \DevUpload\Controller\HomeController::excluiPasta();
});

$app->post('/excluirArquivo', function(){
    return \DevUpload\Controller\HomeController::excluirArquivo();
});

$app->post('/alteraFotoPerfil', function(){
    return \DevUpload\Controller\HomeController::alteraFotoPerfil();
});

$app->run();