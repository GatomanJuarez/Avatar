<?php
    
    $nombre = $_POST["Nombre"];
    $genero = $_POST["Genero"];

    if($genero == 1){
        echo "Bienvenido Sr. " . $nombre;
    }
    else{
        echo "Bienvenida Sra. " . $nombre;
    }
    
?>