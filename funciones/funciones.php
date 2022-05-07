<?php
function conectar(){
    $xc = mysqli_connect("localhost", "root", "", "laboratorio07");
    return $xc;
    die();
}
function desconectar($xc){
    mysqli_close($xc);
}

?>  