<?php

namespace app\core; 

// importa a classe Request
use app\core\Request;

class Router
{
    public Request $request;
    // array de rotas definidas 
    protected array $routes = [];

    // construtor da classe Router
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    // Guarda as rotas e callbacks(sao funcoes anonimas) associadas a elas para o metodo GET da requisicao HTTP.
    public function get($path, $callback)
    {
        $this->routes[$path] = $callback;
    }

    // resolve a rota atual e chama o callback associado a ela.
    public function resolve()
    {
        /**
         * 1. Pega o path da URL atual usando a classe Request
         * 2. Pega o metodo HTTP da requisicao usando a classe Request
         * 3. Verifica se existe um callback associado a rota e metodo HTTP
         * 4. Se existir, chama o callback e retorna a resposta
         * 5. Se nao existir, retorna uma mensagem de erro 404
         */
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        // se o callback for uma funcao anonima, chama ela e retorna a resposta "Nao encontrado"
        if ($callback === false) {
            http_response_code(404);
            echo "Not Found";
            exit;// termina a execucao do script
        }
        echo call_user_func($callback);
       
    }
}

