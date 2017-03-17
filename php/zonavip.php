<?php

    session_start();
    if(isset($_SESSION["V.I.P."])){
        echo"Bienvenido(a) a la zona V.I.P.";
    }
    else{
        echo "Acceso Denegado a la zona V.I.P.";
    }

?>