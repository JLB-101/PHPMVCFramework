<?php

// carrega o autoload do composer
require __DIR__ . '/vendor/autoload.php';

// importa a classe Applicacao do namespace core
use app\core\Application;

// Voce pode adicionar mais codigo aqui para iniciar sua aplicacao
// Por example:

// instancia da aplicacao
$app = new Application();

// teste de rota

$app-> router->get('/home', function() {
    return 'Home Page';
});

$app-> router->get('', function() {
    return 'About Us';
});

$app->router->get('/', function() {
    return 'Hello World';
});

$app->router->get('/contact', function() {
    return 'Contact Us';
});

// roda a aplicacao
$app->run();
