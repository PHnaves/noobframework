<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;


class RegisterController extends Controller {
    
    public function index() {
        return $this->view('register'); // Renderiza a view de registro
    }

    public function goToLogin() {
        // URL da página de registro
        $indexUrl = 'index'; // Isso pode ser um caminho relativo ou absoluto
    
        // Redireciona o usuário para a página de registro
        return$this->redirect($indexUrl);
    }
    
        private $userModel;
    
        public function __construct() {
            $this->userModel = new UserModel();
        }
    
        // Registra o usuário no banco de dados
        public function registerUser() {
            // Obtém os dados do formulário
            $name = $_POST['userName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
    
            if ($password !== $confirmPassword) {
                echo "As senhas não correspondem!";
                return;
            }
    
            if ($this->userModel->verificarEmailExistente($email)) {
                echo "Este email já está em uso!";
                return;
            }
    
            if ($this->userModel->cadastrarUsuario($name, $email, $password)) {
                header("Location: /"); // Redireciona para a página inicial
                exit();
            } else {
                echo "Erro ao cadastrar usuário!";
            }
        }
}
    