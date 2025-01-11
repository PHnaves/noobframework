<?php

namespace App\Controllers;

use Core\Controller;

class RegisterController extends Controller {
    
    public function index() {
        return $this->view('register'); // Renderiza a view de registro
    }
}