<?php
require ('../config/conexion.php');

/* Saber el metodo http 
Obtener varios articulos GET	
Crear un articulo POST  
Actualizar un articulo PUT	
Eliminar un articulo DELETE	
*/


// Encabezado tipo Json
header("Content-Type: application/json"); 

//$_SERVER['REQUEST_METHOD'] identifica el tipo de petición GET, POST, PUT, DELETE
switch ($_SERVER['REQUEST_METHOD']){

    case 'GET':
        //Obtener articulos
        $consultaTodos = $conn->query("SELECT id, nom_articulo, precio from articulos");
        $listadoArticulos=$consultaTodos->fetchAll(PDO::FETCH_OBJ);
        //https://www.php.net/manual/es/function.json-encode.php
        print_r(json_encode($listadoArticulos,JSON_UNESCAPED_UNICODE)); 
        //echo "Listar";
    break;
    
   case 'POST':
        //Agregar un articulo
        //https://www.php.net/manual/en/wrappers.php
        $_POST=json_decode(file_get_contents('php://input'),true);
        $nom_articulo =$_POST['nom_articulo'];
        $precio =$_POST['precio'];
        $sql=$conn->exec("INSERT INTO articulos (nom_articulo, precio) VALUES ('$nom_articulo','$precio')");
		//echo "Agregar";
        
    break;
    
    case 'PUT':
        //Actualizar un articulo
        $_PUT=json_decode(file_get_contents('php://input'),true);
        $id=$_GET['id'];
        $nomA =$_PUT['nom_articulo'];
        $precioA =$_PUT['precio'];
        $sqlUpdate = $conn->exec("UPDATE articulos SET nombre='$nomA',apellido='$precioA' WHERE id= '$id'");
		//echo "Actualizar un articulo ";
    break;
    
    case 'DELETE':
        //Eliminar un articulo 
        $id=$_GET['id'];
        $sqlDelete = $conn->exec("DELETE FROM articulos WHERE id= '$id'");
		//echo "Eliminar articulo ";
	break;

}


?>