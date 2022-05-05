<?php


include("../config/conexion.php");
include("../clases/crearUsuario.php");



if(isset($_REQUEST['email'])&& isset($_REQUEST['password']))
{
    $nombre =$_REQUEST['nombre'];
    $apellido =$_REQUEST['apellido'];
    $email =$_REQUEST['email'];
    $password =md5($_REQUEST['password']);

    //echo ($nombre."<br>".$apellido."<br>".$email."<br>".$password."<br>");

    $datos = new crearUsuario($nombre,$apellido,$email,$password);    

    $insercion = $conn->prepare("INSERT INTO usuario (nombre, apellido, email, password)
    value (:nombre,:apellido,:email, :password)");
 
    try{
        $insercion->execute((array)$datos);
        $msg ="Su registro se ha guardado exitosamente!";
        
    }catch(PDOException $e){
        if($e->errorInfo[1] == 1062){
            $msg="Correo electronico ya está registrado en el sistema";
        }else{
            echo ("OTRO ERROR");
            $msg = "Error al guardar los datos";
        }
    }
    echo '<meta http-equiv="refresh" content="3, url=iniciarSesion.php">';

}else{
    echo "No está definido";
    echo '<meta http-equiv="refresh" content="3; url=../registrarse.php">';
}
?>