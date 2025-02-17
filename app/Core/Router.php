<?php


namespace Core;

use Psr\Container\ContainerInterface;

class Router
{

    public  $routes = [];

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }



    public function add(string $method, string $route, $controler)
    {

        $this->routes[] = [
            'method' => $method,
            'route' => $route,
            'controller' => $controler
        ];
        return $this;
    }


    public function get($route, $controler)
    {

        return  $this->add('GET', $route, $controler);
    }

    public function post($route, $controler)
    {

        return  $this->add('POST', $route, $controler);
    }

    public function patch($route, $controler)
    {

        return  $this->add('PATCH', $route, $controler);
    }


    public function route($uri, $method)
    {

        foreach ($this->routes as $route) {
            if ($route['route'] == $uri && $route['method'] == $method) {
                [$class, $method] = $route['controller'];




                if (class_exists($class) && method_exists($class, $method)) {
                    $controller = $this->container->get($class);

                    call_user_func([$controller, $method]);
                } else {
                    abort();
                }
            }
        }
    }
}
