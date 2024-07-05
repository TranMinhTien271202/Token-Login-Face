<?php

namespace Core;

class Controller {
    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    protected function render($view, $data = []) {
        extract($data);
        require __DIR__ . '/../app/views/' . $view . '.php';
    }
    public function Response($data, $status = 200) {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
    public function redirect($route, $status = 302) {
        header('Location: ' . $route, true, $status);
        exit;
    }
}
