<?php
require_once "./Controller/gameController.php";
require_once "./Controller/categoryController.php";
require_once "./Controller/loginController.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action= 'gameHome';
    }

    $params = explode("/", $action);

    $gameController = new gameController(); 
    $categoryController = new categoryController();
    $loginController = new loginController();

    switch ($params[0]) {
        //   ------------------------------REGISTRO------------------------------------------------
        case 'register':
            $loginController->register();
            break;
        case 'registerVerify':
            $loginController->registerVerify();
            break;
        //   ------------------------------LOGIN------------------------------------------------
        case 'login':
            $loginController->login();
            break;
        case 'logout':
            $loginController->logout();
            break;
        case 'verify':
            $loginController->loginVerify();
            break;
        //   ------------------------------HOME DE GAME Y CATEGORY------------------------------------------------
        case 'gameHome':
            $gameController->showHome();
            break;
        case 'categoryHome':
            $categoryController->showHome();
            break;
        //   ------------------------------AGREGAR CATEGORY Y GAME------------------------------------------------
        case 'createGame':
            $gameController->createGame();
            break;
        case 'createCategory':
            $categoryController->createCategorys();
            break;
        //   ------------------------------VER GAME Y CATEGORY------------------------------------------------
        case 'viewGame':
                $gameController->getGame($params[1]);
                $categoryController->getCategory($params[1]);
                break;
        case 'viewCategory':
            $categoryController->getCategory($params[1]);            
            break;
        //   ------------------------------ELIMINAR CATEGORY Y GAME------------------------------------------------
        case 'deleteGame':
            $gameController->deleteGame($params[1]);
            break;
        case 'deleteCategory':
            $categoryController->deleteCategory($params[1]);
            break;
        //   ------------------------------EDITAR GAME Y CATEGORY------------------------------------------------
        case 'viewEditGame':
            $gameController->viewEditGame($params[1]);
            break;
        case 'editGame':
            $gameController->editGame();
            break;
        //   ------------------------------VER GAME Y CATEGORY------------------------------------------------
        case 'viewEditGame':
            $categoryController->viewEditCategory($params[1]);
            break;
        case 'viewEditCategory':
            $categoryController->viewEditCategory($params[1]);
            break;
        case 'editCategory':
            $categoryController->editCategory();
            break;
        case 'searchCategory':
            $categoryController->searchCategory($params[0]);
            break;
        case 'searchGame':
            $gameController->searchGame($params[0]);
            break;
        default:
            echo "Error 404";
            break;
    }