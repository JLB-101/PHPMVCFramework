<?php

namespace app\core;

class Request
{

    public function getPath()
    {
        /**
         * 1. Pega o path da URL atual
         * 2. Remove a query string se houver
         * 3. Retorna o path limpo 
         */
    
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        // procura a posicao do caractere '?' na URL
        $position = strpos($path, '?');

        // se houver query string na URL, remove ela do path 
        if ($position === false) {
            return $path;
        }
        // retorna o path ate a posicao do caractere '?'
        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        // retorna o metodo HTTP da requisicao em minusculo
        return strtolower($_SERVER['REQUEST_METHOD']);
        
    }
}