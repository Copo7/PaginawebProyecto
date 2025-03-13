<?php

session_start();



require("../config.php");

require("../librerias/email.php");



$mensaje="<b>Nombre: </b>".$_REQUEST['nombre'];

$mensaje.="<br><b>Email: </b>".$_REQUEST['email'];

$mensaje.="<br><b>Asunto: </b>".$_REQUEST['asunto'];

$mensaje.="<br><b>Mensaje: </b>".$_REQUEST['mensaje'];





if(enviar_mail('gmail@gmail.com', "mensaje enviado desde la web" , $mensaje))

{

    $_SESSION['ok']="El mensaje se envio correctamente";

}else{

    $_SESSION['ko']="No se pudo enviar el mensaje";

}



header("Location:contact-us.php?#formulario");