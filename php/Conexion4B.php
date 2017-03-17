<?php
    $mysqli = new mysqli("localhost", "root", "", "cuartob"); //Conectar a MySQL
    if($mysqli->connect_errno){ //Búsqeuda de errores
        echo "La conexión a la base de datos no se pudo efectuar<br>".
            $mysqli->connect_error; //Error de conexión
    }
    else{
        //echo "La conexión a MySQL se realizó exitosamente";
    }
    
    //mysqli_error()
    //mysqli_errno
?>