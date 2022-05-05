<?php
//session_start();
//include ('../pruebaapi/php/consultaUser.php');


$res = file_get_contents("http://localhost/pruebaapi/api/peticion.php");
$data = json_decode($res,true ); //Decodifica un string de JSON


//select <option value="valor">Etiqueta</option>

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/Index.css" rel="stylesheet" />
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <div>
    <h2 class="titulo">Tienda</h2>
    <nav class="navbar navbar-expand-sm navbar-custom">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="../opciones/nosotros.php" class="nav-link">Ver Carrito</a>
        </li>
        <li class="nav-item">
            <a href="../pruebaapi/php/registrarse.php" class="nav-link">Crear Cuenta</a>
        </li>
</div>
        <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered"> 
                <thead>
                    <?php foreach ($data as $data) {?> 
                        <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $data['nom_articulo']; ?>
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo $data['precio'];} ?>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
   
       
        
       
</body>
</html>
 
