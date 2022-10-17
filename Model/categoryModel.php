<?php
class categoryModel{
    private $db;

function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tp;charset=utf8', 'root', '');//se conecta a la abse de datos (OJO CON dbname= poner el nombre de nuestra tabla)//
    }
    function getCategorys(){
        $sentencia = $this->db->prepare( "SELECT id,genre,gameplay FROM category"); // peparo las tareas
        $sentencia->execute();  // ejecuto la sentencia
        $category = $sentencia->fetchAll(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    
        return $category;
    }

    function insertCategory($genre,$gameplay){ //estos son solo nombres de variables
        $sentencia = $this->db->prepare("INSERT INTO category(genre,gameplay) VALUES(?,?)");    //lo importante es que aca duga titulo,..
                                                                                                                      //PREPARO LA SENTENCIA (EL INSERT)
        $sentencia->execute(array($genre,$gameplay)); //ejecuto la sentencia,si hay 4 valores tengo que tener en el arreglo las 4 variables 
    }

    function deleteCategoryFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM category WHERE id=?");
        $sentencia->execute(array($id)); //tiene un solo parametro 
    }
    
    function updateCategoryFromDB($genre,$gameplay,$id){
        $sentencia = $this->db->prepare("UPDATE category SET genre=?,gameplay=? WHERE id=?");
        $sentencia->execute(array($genre,$gameplay,$id)); 
    }

    function getCategory($id){
        $sentencia = $this->db->prepare( "select * from category WHERE id=?"); // peparo las tareas
        $sentencia->execute(array($id));  // ejecuto la sentencia
        $category = $sentencia->fetch(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    
        return $category ;
    }

    function categorySearch($genero,$gameplay){
        $sentencia = $this->db->prepare( "SELECT * FROM category WHERE genre LIKE ? OR gameplay LIKE ? "); // peparo las tareas
        $sentencia->execute(["%${genero}%" , "%${gameplay}%"]);  // ejecuto la sentencia
        return $sentencia->fetchAll(PDO::FETCH_OBJ); // eso dice devolveme la tupla en formato objeto,ahi distintos tipos    
    }

    
}