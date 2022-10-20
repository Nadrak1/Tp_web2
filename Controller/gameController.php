<?php
require_once "View/gameView.php";
require_once "Model/gameModel.php";
require_once "Helpers/authHelper.php";

class gameController{

    private $model;
    private $modelC;
    private $view;
    private $helper;

    function __construct(){
        $this->model = new gameModel();
        $this->modelC = new categoryModel();
        $this->view = new gameView();
        $this->helper = new authHelper();

    }
    
    function showHome(){
        
        $this->helper->checkLoggedIn();
        
        $user = $this->helper->loggedUser();
        $genre = $this->modelC->getCategorys();
        $game = $this->model->getGame();
        $this->view->showGame($game,$user,$genre);
    }

    function createGame(){
        //$this->helper->checkLoggedIn();
        //if(isset...){}
        if(!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST['id_category_fk'])  ){
            $name=$_POST["name"];
            $price=$_POST["price"];
            $id_category_fk=$_POST["id_category_fk"];
            if( $_FILES["img"]["type"] == "image/jpg" ||
            $_FILES["img"]["type"] == "image/jpeg" ||
            $_FILES["img"]["type"] == "image/png"){
                $this->model->insertGame($name,$price,$id_category_fk,$_FILES["img"]["tmp_name"]);
            }else{
                $this->model->insertGame($name,$price,$id_category_fk);
            }
        }
        $this->view->showHomeLocation();
    }

    function deleteGame($id){
        $this->helper->checkLoggedIn();

        $this->model->deleteGameFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function getGame($id){
       // $this->helper->checkLoggedIn();
        $user = $this->helper->loggedUser();
        $game = $this->model->getGames($id);
        $this->view->viewGame($game,$user);
    }
    
    function viewEditGame($id){
        $this->helper->checkLoggedIn();

        $this->view->editGame($id);
    }

    function editGame(){
        $this->helper->checkLoggedIn();
        if(!empty($_POST["name"]) && !empty($_POST["price"]) && !empty($_POST['id_category_fk'])   ){

            $name=$_POST["name"];
            $price=$_POST["price"];
            $id_category_fk=$_POST["id_category_fk"];
            $id=$_POST["id"];

            if( $_FILES["img"]["type"] == "image/jpg" ||
            $_FILES["img"]["type"] == "image/jpeg" ||
            $_FILES["img"]["type"] == "image/png"){
                $this->model->updategameFromDB($name,$price,$id_category_fk,$_FILES["img"]["tmp_name"],$id);
            }else{
                $this->model->updategameFromDB($name,$price,$id_category_fk,$imagen= null,$id);
            }
        }
        $this->view->showHomeLocation();
    }

    function searchGame(){
        if(!empty($_POST["busqueda"])){
            $palabra = $_POST["busqueda"];
            $numero = $_POST["busqueda"];
            $categoria = $_POST["busqueda"];
            $user = $this->helper->loggedUser();
            $search = $this->model->gameSearch($palabra,$numero,$categoria);
            $this->view->searchGame($user,$search);
        }else{
            $this->view->showHomeLocation();
        }
    }
    

}