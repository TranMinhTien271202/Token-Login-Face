<?php

namespace App\Controllers;

use App\Http\Request;
use Core\Controller;

class ErrorController extends Controller
{
    public function ER_index()
    {
        $this->render('errors\404');
    }

}
