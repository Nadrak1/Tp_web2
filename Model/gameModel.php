<?php
class gameModel{
    private $db;

function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tp;charset=utf8', 'root', '');//se conecta a la abse de datos (OJO CON dbname= poner el nombre de nuestra tabla)//
    }
    function getGame(){
        $sentencia = $this->db->prepare( "SELECT * FROM videogame "); // peparo las tareas
        $sentencia->execute();  // ejecuto la sentencia
        $game = $sentencia->fetchAll(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    
        return $game;
    }

    function insertGame($name,$price,$id_category_fk){ //estos son solo nombres de variables
        $sentencia = $this->db->prepare("INSERT INTO videogame(name,price,id_category_fk) VALUES(?,?,?)");    //lo importante es que aca duga titulo,..
                                                                                                                      //PREPARO LA SENTENCIA (EL INSERT)
        $sentencia->execute(array($name,$price,$id_category_fk)); //ejecuto la sentencia,si hay 4 valores tengo que tener en el arreglo las 4 variables 
    }

    function deleteGameFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM videogame WHERE id=?");
        $sentencia->execute(array($id)); //tiene un solo parametro 
    }

    function updategameFromDB($name,$price,$id_category_fk,$id){
        $sentencia = $this->db->prepare("UPDATE videogame SET name=?,price=?,id_category_fk=? WHERE id=?");
        $sentencia->execute(array($name,$price,$id_category_fk,$id)); 
    }

    function getGames($id){
        $sentencia = $this->db->prepare( "select * from videogame WHERE id=?"); // peparo las tareas
        $sentencia->execute(array($id));  // ejecuto la sentencia
        $game = $sentencia->fetch(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    
        return $game ;
    }

    function gameSearch($palabra,$numero){
        $sentencia = $this->db->prepare( "SELECT * FROM videogame WHERE name LIKE ? OR price LIKE ? "); // peparo las tareas
        $sentencia->execute(["%${palabra}%" , "%${numero}%"]);  // ejecuto la sentencia
        return $sentencia->fetchAll(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    
    }


}