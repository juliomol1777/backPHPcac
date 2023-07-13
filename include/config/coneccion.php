<?php
    $conexion = mysqli_connect("localhost","root","","registroscac");

    if(mysqli_connect_errno()){
        echo "error de conexion";
    }else{
        echo "funciona todo ok!!!!!";
    }

?>