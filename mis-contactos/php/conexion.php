<?php

    function conectarse(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $bd = "mis_contactos";

        $conectar = new mysqli($servidor, $usuario, $password, $bd) or die ("No se puede conectar a la Base de Datos");

        return $conectar;
    }

    $conexion = conectarse();
?>