<?php
class userModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tp;charset=utf8', 'root', '');
    }
    
    function getUsers($email){
        $sentencia = $this->db->prepare( "SELECT * FROM users WHERE email = ?"); 
        $sentencia->execute(array($email)); 
        return $sentencia->fetch(PDO::FETCH_OBJ);  
    }

    public function getUser(){
        $sentencia = $this->db->prepare("SELECT rol, email FROM users");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertUser($usuario,$email,$password){ 
        $sentencia = $this->db->prepare("INSERT INTO users(rol,email,password) VALUES(?,?,?)");    
        $sentencia->execute(array($usuario,$email,$password));
    }
}