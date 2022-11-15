<?php
require_once "./smarty-4.2.1/libs/Smarty.class.php";

class gameView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showGame($game,$user,$genre){
        $this->smarty->assign('game',$game);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('genre', $genre);
        $this->smarty->display('./Template/game/showGame.tpl');
    }

    function showHomeLocation(){
        header("Location:".BASE_URL."gameHome");
    }

    function viewGame($game,$user){
        $this->smarty->assign('game',$game);
        $this->smarty->assign('user',$user);
        $this->smarty->display('./Template/game/showOneGame.tpl');
    }

    function editGame($id,$game,$user){
        $this->smarty->assign('id',$id);
        $this->smarty->assign('game',$game);
        $this->smarty->assign('user',$user);
        $this->smarty->display('./Template/game/editGame.tpl');
    }

    
    function searchGame($user,$search){
        $this->smarty->assign('game',$search);
        $this->smarty->assign('user', $user);

        $this->smarty->display('./Template/game/showGame.tpl');
    }
}