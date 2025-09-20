<?php

namespace core;

class Application
{
   
    public Router $router;
    public Request $request;
    public Response $response;

    // 
    public function __construct()
    {
        $this->router = new Router();
    }

}