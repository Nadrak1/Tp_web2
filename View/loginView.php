<?php
require_once "./smarty-4.2.1/libs/Smarty.class.php";

class loginView{
    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function showRegister($error = ""){
        $this->smarty->assign('titulo','Register');
        $this->smarty->assign('error',$error);
        $this->smarty->display("./Template/login/register.tpl");
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo','LOG IN');
        $this->smarty->assign('error',$error);
        $this->smarty->display("./Template/login/login.tpl");
        
    }

    function showHomeLocation(){
        header("Location:".BASE_URL."gameHome");
    }
}