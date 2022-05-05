<?php
session_start();
 include("../config/conexion.php");

 if(isset($_REQUEST['email'])&& isset($_REQUEST['password']))
 {
    
     $email =$_REQUEST['email'];
     $password =md5($_REQUEST['password']);

     $consulta=$conn->query("SELECT id_usuario From usuario WHERE email='$email' and password = '$password'");
     echo $email;
     echo $password;
     $consulta->setFetchMode(PDO::FETCH_ASSOC);

     $consulta->execute();
     $row = $consulta->fetch();

     if($consulta->rowCount() > 0){
         echo "Tiene autorización para acceder";
         $_SESSION['sw']=true;
         $_SESSION['id_usuario']=$row['id_usuario'];
         header("Location: ../php/index.php");
         exit;
     }else{
         header("Location: ../php/iniciarSesion.php?msg=Datos incorrectos para ingresar, intente nuevamente");
         exit;
     }
 }else{
    echo "No está definido";
    echo '<meta http-equiv="refresh" content="5; url=../php/iniciarSesion.php">';
}
?>