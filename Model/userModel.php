<?php
class userModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tp;charset=utf8', 'root', '');//se conecta a la abse de datos (OJO CON dbname= poner el nombre de nuestra tabla)//
    }
    
    function getUsers($email){
        $sentencia = $this->db->prepare( "SELECT * FROM users WHERE email = ?"); // peparo las tareas
        $sentencia->execute([$email]);  // ejecuto la sentencia
        return $sentencia->fetch(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    

    }
    function insertUser($email,$password){ //estos son solo nombres de variables
        $sentencia = $this->db->prepare("INSERT INTO users(email,password) VALUES(?,?)");    //lo importante es que aca duga titulo,..
                                                                                                                      //PREPARO LA SENTENCIA (EL INSERT)
        $sentencia->execute(array($email,$password)); //ejecuto la sentencia,si hay 4 valores tengo que tener en el arreglo las 4 variables 
    }
}