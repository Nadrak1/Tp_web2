<?php

class authHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            
        
        }else{
            session_abort();
            $this->loggedUser();
        }
        
    }

    public function loggedUser(){
        
        //if ($this->checkLoggedIn()){
            $user = $this->createUser();
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