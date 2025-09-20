<?php

namespace app\core;

class Application
{
   
    public Router $router;
    public Request $request;
    

    // construtor da classe Application 
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
        
    }

    // metodo para rodar a aplicacao
    public function run()
    {
      $this->router->resolve();
    }

}