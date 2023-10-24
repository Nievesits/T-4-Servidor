<?php 

    //función sin salida
    function saludar($nombre){
        echo"hola $nombre";
    }
    $nombre="Maria";
    saludar($nombre);

    //Función con salida
    $nombre ="Pepe";
    $apellido ="Garcia"; 

    function saludar_consalida($nombre,$apellido){
        $resultado ="Hola".$nombre.$apellido;
        echo $resultado;
        return $resultado;
    }
    saludar_consalida($nombre,$apellido);

    ?>