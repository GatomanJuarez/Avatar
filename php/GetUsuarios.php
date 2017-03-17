<?php
    include("Conexion4B.php"); //Sinónimo de "import" de Java
    //Importa el funcionamiento de este archivo.
    

    $user = $_POST["usuario"]; //Recibe la variable superglobal "usuario"
    $pass = $_POST["password"]; //Recibe la variable superglobal "password"

    $Resultados = $mysqli->query("SELECT * FROM usuarios WHERE nombre='$user' AND password='$pass'"); //Comsulta de MySQL

    $Filas = $Resultados->fetch_all(); //Obtiene todos los valores de la consulta
    
    if(count($Filas) == 0){
        echo "El Usuario no se encuentra registrado";
    }
    else{
        echo "Bienvenido".$user.", acceso permitido a la zona V.I.P.";
        session_start();
        $_SESSION["V.I.P."] = $user;
        $url = "zonavip.php";
        header("Location: ".$url); //Redirecciona la página
        die(); //Cierra el flujo de datos de esta página
    }

    //var_dump($Filas);

    
?>