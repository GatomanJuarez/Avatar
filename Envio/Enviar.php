<?php
    include("class.phpmailer.php");
    include("class.smtp.php");
    
    $mail = new PHPMailer();

    $de = "jdaniel@miservidor.com";
    $para = $_GET['email'];
    $asunto = $_GET['asunto'];
    $texto = $_GET['texto'];

    $mail -> SMTPDebug = 1;
    $mail -> IsSMTP();
    $mail -> SMTPAuth = true;   //Habilita la autentificación
    $mail -> SMTPSecure = "ssl";    //Establece el protocolo de autentificación
    $mail -> Host = "smtp.gmail.com";   //Establece host servidor SMTP
    $mail -> Port = 465;    //Establece el puerto de la conexión

    $mail -> Username = "jdpg9000@gmail.com";   //Usuario del servidor SMTP
    $mail -> Password = "Mario & Sonic"; //Contraseña del servidor

    $mail -> From = "jdpg9000@gmail.com"; //Destinatario
    $mail -> FromName = "J.Daniel"; //Nombre del destinatario
    $mail -> Subject = $asunto;
    $mail -> WordWrap = 50; //Número máximo de palabras agrupadas
    $mail -> MsgHTML($texto);
    $mail -> AddReplyTo("jdpg9000@gmail.com","Jefe Dan");
    $mail -> AddAddress("jdpg9000@gmail.com","Name");
    $mail -> IsHTML(true);  //Habilita el contenido HTML

    if (!$mail -> Send()){  //Enviar Correo
        echo "Error: ".$mail -> ErrorInfo;
    }
    else{
        echo "¡Gracias por enviarnos tu mensaje! ✋👌";
    }
?>