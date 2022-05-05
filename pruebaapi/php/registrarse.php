<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar Usuario</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
</head>
<main class="form-signin">

  <body class="text-center">

    <form method="post" action="../php/procesarUsuario.php">
     
     <a class="h3 mb-3 fw-normal " href="../index.php">Registrate</a>

      <p class="text-danger"> <?php if(isset($_GET['msg'])) echo $_GET['msg'];?> </p>
      
      <div class="form-floating">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
      
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
      </div>
    
      <div class="form-group">
        <input type="submit" value="Crear Usuario" class="w-100 btn btn-lg btn-primary">
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          ¿Ya tienes una cuenta?<a href="../php/iniciarSesion.php">Login</a>
        </div>
      </div>
     
    </form>
    </body>
</main>



</html>