<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$header = 'From: ' .$correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombres . " \r\n";
$mensaje = "Este mensaje fue enviado por: " . $apellidos . " \r\n";
$mensaje .= "Telefono de contacto: " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $correo . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'robert_15_95@hotmail.com';
$asunto = 'Asunto del Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location:Index.html");
?>