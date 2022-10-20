<?php
require_once "View/categoryView.php";
require_once "Model/categoryModel.php";
require_once "Helpers/authHelper.php";

class categoryController{

    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->model = new categoryModel();
        $this->view = new categoryView();
        $this->helper = new authHelper();
    }
    
    function showHome(){
        $this->helper->checkLoggedIn();
        $user = $this->helper->loggedUser();
        $category = $this->model->getCategorys();
        $this->view->showCategory($category,$user);
    }

    function createCategorys(){
        if(!empty($_POST["genre"]) && !empty($_POST["gameplay"])){
            $this->model->insertCategory($_POST["genre"], $_POST["gameplay"]);
            $this->view->showHomeLocation();
        }else{
            $this->view->showHomeLocation();
        }
    }

    function deleteCategory($id){
        $this->helper->checkLoggedIn();

        $this->model->deleteCategoryFromDB($id);
        $this->view->showHomeLocation();
    }

    function getCategory($id){
        $this->helper->checkLoggedIn();
        $user = $this->helper->loggedUser();
        $tarea = $this->model->getCategory($id);
        $this->view->viewCategory($tarea,$user);
    }

    function viewEditCategory($id){
        $this->helper->checkLoggedIn();

        $this->view->viewEditCategory($id);
    }
    function editCategory(){
        if(!empty($_POST["genre"]) && !empty($_POST["gameplay"] && !empty($_POST['id']))){
            $this->helper->checkLoggedIn();
            $game = $this->model->updateCategoryFromDB($_POST['genre'],$_POST['gameplay'],$_POST['id']);
            $this->view->showHomeLocation();
        }else{
            $this->view->showHomeLocation();
        }
    }

    function searchCategory(){
        if(!empty($_POST["busqueda"])){
            $genero = $_POST["busqueda"];
            $gameplay = $_POST["busqueda"];
            $user = $this->helper->loggedUser();
            $search = $this->model->categorySearch($genero,$gameplay);
            $this->view->searchCategory($user,$search);
        }else{
            $this->view->showHomeLocation();
        }
    }
    
}