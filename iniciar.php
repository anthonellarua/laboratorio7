<?php
    session_start();
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    include('funciones/funciones.php');
    $xc=conectar();
    $sqlinicio="SELECT * FROM registro WHERE usuario= '".$usuario."'"."AND contrasena ="."'".$contrasena."'";

    /////resultado del inicio////
    $resinicio=mysqli_query($xc, $sqlinicio);
    $filas=mysqli_fetch_array($resinicio) or die(header("Location: registro.php"));
    if(isset($filas)){
        $_SESSION['usuario']=$_POST['usuario'];
        $_SESSION['contrasena']=$_POST['contrasena'];
        header("Location: paginaprincipal.php");
        echo $_SESSION['usuario'];
        exit();
    }
    else{
        echo 'Parece que no tiene una cuenta creada';
    }
?>