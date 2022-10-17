<?php
require_once "smarty-4.2.1/libs/Smarty.class.php";

class categoryView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showCategory($category,$user){
        $this->smarty->assign("category",$category);
        $this->smarty->assign('user', $user);
        $this->smarty->display("Template/category/showCategory.tpl");
    }
    
    function showHomeLocation(){
        header("Location:".BASE_URL."categoryHome");
    }

    function viewCategory($category){
        $this->smarty->assign("category",$category);
        $this->smarty->display("Template/category/showOneCategory.tpl");
    }

    function viewEditCategory($id){      
        $this->smarty->assign('id',$id);
        $this->smarty->display('./Template/category/editCategory.tpl');
    }

    function searchCategory($user,$search){
        $this->smarty->assign("category",$search);
        $this->smarty->assign('user', $user);
        $this->smarty->display("Template/category/showCategory.tpl");
    }
}