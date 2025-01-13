<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;

class IndexController extends Controller {
    
    public function index() {
        return $this->view('index');
    }

    public function goToRegister() {
        return$this->redirect('register');
    }

    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Verifica as credenciais e faz o login
    public function loginUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userModel->getUserByEmail($email);

        if (!$user) {
            echo "Usuário não encontrado!";
            return;
        }

        // Verifica se a senha está correta
        if (password_verify($password, $user['senha'])) {
            session_start();
            $_SESSION['user'] = $user['id']; // Armazena o id do usuário na sessão
            header("Location: /dashboard"); // Redireciona para o painel ou página inicial do usuário
            exit();
        } else {
            echo "Senha incorreta!";
        }
    }
}
