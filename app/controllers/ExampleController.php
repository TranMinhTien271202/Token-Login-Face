<?php

namespace App\Controllers;

use Core\Controller;

class ExampleController extends Controller {
    public function index() {
        $items = ['Item 1', 'Item 2', 'Item 3'];
        $condition = true;
        $token_campaign = $_COOKIE['token_campaign'] ?? '';
        $this->render('example', ['message' => $token_campaign, 'items' => $items, 'condition' => $condition]);
    }

    public function example() {
        $items = ['Example 1', 'Example 2', 'Example 3'];
        $condition = false;
        $this->render('example', ['message' => 'Example page', 'items' => $items, 'condition' => $condition]);
    }
    public function json() {
        $items = ['Item 1', 'Item 2', 'Item 3'];
        $condition = true;

        $data = [
            'message' => 'Hello, world!',
            'items' => $items,
            'condition' => $condition,
        ];

        $this->Response($data);
    }
}
