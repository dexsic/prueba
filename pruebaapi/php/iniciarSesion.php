<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
   

    <link rel="stylesheet" type="text/css" href="../css/styleIndex.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <style>
    @media(min-width: 768px){
        .bd-placeholder-img-lg{
            font-size: 3.5rem;
        }
    }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 5%;">
    
    
        <div class="d-flex justify-content-center">
            <div class="card">
                <div class="card-header">
                
                    <h3>Acceder al sistema</h3>
                    <div class="d-flex justify-content-end social_icon">
                    
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-signin" method="POST" action="../php/procesarLogin.php">
                    <p class="text-danger"> <?php if(isset($_GET['msg'])) echo $_GET['msg'];?></p>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recordar contraseña
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿No tienes una cuenta?<a href="../php/registrarse.php">Registrate</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>