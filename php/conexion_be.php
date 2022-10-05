<?php


    $conexion = mysqli_connect("localhost","root","","villagracosso");

    if($conexion){
        echo 'conectado exitosamente';

    }else{
        echo 'no se ha podido conectar';

    }
?>