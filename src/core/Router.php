<?php

/**
 * Class Router
 */

//namespace afegit

namespace Manelgavalda\myframework\core;

use Exception;



class Router
{
    /**
     * @var array
     */
    protected $routes = [];


    /**
     * @param $routes: Array $routes
     */
    public function define($routes) {
        $this ->routes = $routes;
    }

    public static function load($routes)
    {
        //Per fer servir l'objecte router dins el mètode estàtic tindrem que definir-lo dins la funció.
        $router = new static;
        $router ->routes=require $routes;
        return $router;
    }


    /**
     * @param $uri
     * @throws Exception
     */

    public function direct($uri)
    {
        //Redirigim l'usuari segons la seva URI.
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception("No s'ha trobat la ruta");
        }

    }

}