<!DOCTYPE html>
<?php
    include('funciones/funciones.php');
    
    $xc = conectar();

    if(isset($_POST['enviar'])){
        $nombres = trim($_POST["nombres"]);
        $apellidos = trim($_POST["apellidos"]);
        $usuario = trim($_POST["usuario"]);
        $contrasena = trim($_POST["contrasena"]);
        $sql_registro = "INSERT INTO registro (nombres, apellidos, usuario, contrasena) values ('$nombres', '$apellidos', '$usuario', '$contrasena')";
        $res_registro = mysqli_query($xc, $sql_registro);
        
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="css_login/login.css"><style type="text/css"></style>

        <title>Registrarse</title>
    </head>
    <body>
        <div class="row justify-content-md-center">
            <div class="col-md-5 col-sm-12">
                <section class="container">
                    <h1 class="mt-5 mb-5">REGISTRARSE</h4>
                    <form action="" method="post" class="form-group">
                        <input class="form-control mb-3" name="nombres" type="text" placeholder="Nombres">
                        <input class="form-control mb-3" name="apellidos" type="text" placeholder="Apellidos">
                        <input class="form-control mb-3" name="usuario" type="text" placeholder="Usuario">
                        <input class="form-control mb-3 mb-3" name="contrasena" type="password" placeholder="Contraseña">
                        <div class="row justify-content-center">
                            <input type="submit" name="enviar" class="boton" value="Registrarse" />
                            <p class="mt-5 mb-3">¿Ya tiene una cuenta?<p>
                            <div class="row justify-content-center">
                                <input type="button" class="boton" onclick="location.href='index.php';" value="Iniciar sesión" />
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>