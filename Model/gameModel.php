<?php
class gameModel{
    private $db;

function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tp;charset=utf8', 'root', '');//se conecta a la abse de datos (OJO CON dbname= poner el nombre de nuestra tabla)//
    }
    function getGame(){
        $sentencia = $this->db->prepare("SELECT a.*, b.genre FROM videogame a INNER JOIN category b ON a.id_category_fk = b.id;"); 
        $sentencia->execute();  
        $game = $sentencia->fetchAll(PDO::FETCH_OBJ);   
        return $game;
    }

    function insertGame($name,$price,$id_category_fk,$imagen = null){ 
        $pathImg = null;
        if($imagen){
            $pathImg = $this->uploadImage($imagen);
        }
        $sentencia = $this->db->prepare("INSERT INTO videogame(name,price,id_category_fk,imagen) VALUES(?,?,?,?)");    
        $sentencia->execute(array($name,$price,$id_category_fk,$pathImg));
    }

    private function uploadImage($imagen){
        $target = "imgs/" . uniqid() . ".jpg";
        move_uploaded_file($imagen, $target);
        return $target;
    }

    function deleteGameFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM videogame WHERE id=?");
        $sentencia->execute(array($id)); //tiene un solo parametro 
    }

    function updategameFromDB($name,$price,$id_category_fk,$imagen = null,$id){
        $pathImg = null;
        if($imagen){
            $pathImg = $this->uploadImage($imagen);
        }
        $sentencia = $this->db->prepare("UPDATE videogame SET name=?,price=?,id_category_fk=?,imagen=? WHERE id=?");
        $sentencia->execute(array($name,$price,$id_category_fk,$pathImg,$id)); 
    }


    function getGames($id){
        $sentencia = $this->db->prepare( "select * from videogame WHERE id=?"); 
        $sentencia->execute(array($id));  
        $game = $sentencia->fetch(PDO::FETCH_OBJ);   
        return $game ;
    }

    function gameSearch($palabra,$numero){
        $sentencia = $this->db->prepare( "SELECT a.*, b.genre FROM videogame a INNER JOIN category b ON a.id_category_fk = b.id WHERE name LIKE ? OR price LIKE ? "); 
        $sentencia->execute(["%${palabra}%" , "%${numero}%"]);  
        return $sentencia->fetchAll(PDO::FETCH_OBJ);  
    }
    

}