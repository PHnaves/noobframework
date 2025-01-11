<?php

namespace App\Controllers;

use Core\Controller;

class IndexController extends Controller {
    
    public function index() {
        return $this->view('index');
    }

    public function goToRegister() {
    // URL da página de registro
    $registerUrl = 'register'; // Isso pode ser um caminho relativo ou absoluto

    // Redireciona o usuário para a página de registro
        return$this->redirect($registerUrl);
    }
}
