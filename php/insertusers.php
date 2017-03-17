<?php
    
    include("Conexion4B.php");  
    
    $nombre = $_POST["usuario"]; //Usuario proviene de: <input name="nombre">
    $pass = $_POST["password"]; //Contraseña proviene de: <input name="password">
    $rol = $_POST["rol"]; //Rol de Usuario proviene de: <select name="rol">    

    $directorio = "../avatares/"; //Dirección donde guardará la imágen
    $avatar = $directorio . basename($_FILES["avatar"]["name"]); //Borra la ruta temporal e inserta la nuestra
    $extension = pathinfo($avatar,PATHINFO_EXTENSION); //Obtiene la extensión del archivo
    $tamano = $_FILES["avatar"]["size"]; //Regresa el peso de la imágen

    //$mysqli->query("INSERT INTO usuarios (nombre) VALUES ('$nombre')"); //Insercion de la Base de datos

    if($nombre == "" || $pass == "" || $rol == "none"){ //Datos incompletos
        echo("Los Datos están incompletos.<br>Regresa y llena todos los campos.");
    }
    else{ //Datos completos
        if($extension == "jpg" || $extension == "png" || $extension == "gif"){
            //echo("El formato es el adecuado");
            if($tamano > 0 && $tamano < 2097152){
                //echo("Tamaño aceptable");
                $mysqli->query("INSERT INTO usuarios (nombre, password, rol, avatar)
                        VALUES ('$nombre','$pass','$rol','$avatar')"); //Inserción en MySQL
                move_uploaded_file($_FILES["avatar"]["tmp_name"], $avatar); //Guarda el archivo en la ruta
                
                if($mysqli->errno == 0){ //Revisando Errores de x tipo
            //Libre de errores
            echo("El registro de usuario se realizó exitosamente");
        }
        else{ //Ha ocurrido un error            
            echo("Ha ocurrido un problema con el registro.
            <br>Por favor vuelva a intentarlo");
        }
            }
            else{
                echo("El archivo que ha subido es muy pequeño o muy grande<br>
                Por favor ingrese uno nuevo");
            }                
        }
        else{
            echo("El archivo que ha subido no es compatible<br>
            Regrese e inserte una imágen .jpg, .png o .gif");
        }
    }
    
    

    //Depurar: URL + XDEBUG_SESSION_START=xdebug
    
?>