<?php
require_once "./Model/userModel.php";
require_once "./View/loginView.php";


class loginController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new userModel();
        $this->view = new loginView();

    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("te deslogueaste!!");
    }
    function login(){
        $this->view->showLogin();
    }    
    
    function register(){
        $this->view->showRegister();
    }     

    function registerVerify(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $user = $this->model->getUsers($email);

            if(!isset($user->email)){
                $rol = "usuario";
                $this->model->insertUser($rol,$email,$password);
                
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION['rol'] = $user->rol;
                $this->view->showHomeLocation();
            }else{
                $this->view->showRegister("Acceso denegado ya existe esa cuenta");
            }
        }
    }

    function loginVerify(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$this->model->insertUser($email,$password);
            $user = $this->model->getUsers($email);
            
            if($user && password_verify($password,$user->password)){

                session_start();
                $_SESSION["email"] = $_POST['email'];
                $_SESSION['password'] = $user->password;
                $_SESSION['rol'] = $user->rol;
                $this->view->showHomeLocation();
                
            }else{
                $this->view->showLogin("E-mail o contraseña incorrecta ");
                
            }

        }else{

        }
    }
}    
