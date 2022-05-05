<?php

    include("../config/conexion.php");
    $id_=$_SESSION['id_usuario'];
   
    $result = $conn->query("SELECT * FROM usuario WHERE id_usuario='$id_'");
    $datoUser=$result->fetch(PDO::FETCH_OBJ);
    
    
?>