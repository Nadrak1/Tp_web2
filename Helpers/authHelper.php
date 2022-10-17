<?php

class authHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            header("Location:".BASE_URL."login");
        }else{
            $logged = isset($_SESSION['email']);
        }
        session_abort();
        return $logged;
    }

    public function loggedUser(){
        if ($this->checkLoggedIn()){
            $user = $this->createUser();
            return $user;
        }else
            return null;
    }

    private function createUser(){
        session_start();
        $user = new stdClass();
        $user->email = $_SESSION['email'];
        $user->password = $_SESSION['password'];
        $user->rol = $_SESSION['rol'];
        session_abort();
        return $user;
    }

    public function checkIsAdmin(){
        session_start();
        $isAdmin = ($_SESSION['rol'] == 'admin');
        session_abort();
        return $isAdmin;
    }



}