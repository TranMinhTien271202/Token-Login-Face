<?php

namespace Core;

class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Lấy chỉ phần đường dẫn, bỏ qua query string
        foreach ($this->routes[$method] as $route => $callback) {
            $routePath = parse_url($route, PHP_URL_PATH); // Lấy chỉ phần đường dẫn từ route, bỏ qua query string
            if ($path === $routePath) {
                call_user_func($callback);
                return;
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
    
}
