<?php

class authHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            header("Location:".BASE_URL."gameHome");
        }else{
            session_abort();
            $this->loggedUser();
        }
        session_abort();
    }

    public function loggedUser(){
        session_start();
        //if ($this->checkLoggedIn()){
            $user = $this->createUser();
            session_abort();
            return $user;
        //}else{
          //  return null;
        //}
        
    }

    private function createUser(){
        
        $user = new stdClass();
        if(isset($_SESSION['email'])){
            $user->email = $_SESSION['email'];
            $user->rol = $_SESSION['rol'];
            return $user;
            
        }else{
            $_SESSION['rol'] = "nulo";
            $user->rol = $_SESSION['rol'];
            return $user;
            
        }

    }



}