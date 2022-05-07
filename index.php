<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="./css_login/login.css"><style type="text/css"></style>

        <title>Iniciar sesión</title>
    </head>
    <body>
        <div class="row justify-content-md-center">
            <div class="col-md-5 col-sm-12">
                <section class="container">
                    <h2 class="mt-5 mb-5">INICIAR SESIÓN</h4>
                    <form action="iniciar.php" method="post">
                        <input class="form-control mb-3" name="usuario" type="text" placeholder="Usuario">
                        <input class="form-control mb-3 mb-3" name="contrasena" type="password" placeholder="Contraseña">
                        <div class="row justify-content-center">
                            <button type="submit" name="enviar" class="boton" src="paginaprincipal.php">Iniciar sesión</button>
                            <p class="mt-5 mb-3">Si no tiene cuenta,<p>
                            <div class="row justify-content-center">
                                <button class="boton" role="link" onclick="window.location='registro.php'">Regístrese</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>