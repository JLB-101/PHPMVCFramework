<?php

// exibição de erros para depuração (desenvolvimento) , NB: desativar em produção
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// carrega o autoload do composer
require_once __DIR__ . '/vendor/autoload.php';

// importa classess do namespace core
use app\core\Application;

// instancia da aplicacao
$app = new Application();

/**
 * Define as rotas da aplicacao
 * Cada rota e associada a uma funcao anonima (callback) que sera executada quando a rota for acessada
 * Estrutura: $app->router->get('/caminho', 'funcao'); O callback pode ser uma funcao anonima ou o nome de uma funcao definida em outro lugar
    */
$app->router->get('/', function() {
    return 'Hello World';
});

$app->router->get('/contact', 'contact');

// roda a aplicacao
$app->run();
