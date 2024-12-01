<?php

namespace Core;

class Router
{
    protected $routes = [];
    protected function add($uri, $controller, $method){
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method
        ];
    }
    public function get($uri, $controller)
    {
        $this->add($uri, $controller, "GET");
    }
    public function post($uri, $controller)
    {
        $this->add($uri, $controller, "POST");
    }
    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, "DELETE");
    }
    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, "PATCH");
    }
    public function put($uri, $controller)
    {
        $this->add($uri, $controller, "PUT");
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route["uri"] === $url && $route["method"] === strtoupper($method)) {
                return  require base_path($route["controller"]);
            }
        }
        $this->abort();

    }
    protected function abort($code = 404)
    {
        require base_path("views/{$code}.php");
        exit;
    }
}
