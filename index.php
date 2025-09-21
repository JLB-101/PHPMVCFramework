<?php

// exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// carrega o autoload do composer
require_once __DIR__ . '/vendor/autoload.php';

// importa a classe Applicacao do namespace core
use app\core\Application;

// Voce pode adicionar mais codigo aqui para iniciar sua aplicacao
// Por example:

// instancia da aplicacao
$app = new Application();

// teste de rota

$app->router->get('/', function() {
    return 'Hello World';
});

$app->router->get('/contact', function() {
    return 'Contact Us';
});

// roda a aplicacao
$app->run();
