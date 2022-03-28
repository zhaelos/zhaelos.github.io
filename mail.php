<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion']
$dieta = $_POST['dieta'];
$alergia = $_POST['alergia'];
$cancion = $_POST['cancion'];

$to = 'EddyRM.93@gmail.com';
$subject = 'Nuevo invitado a la boda';

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Nuevo invitado a la boda"
$message .= "Nombre: " . $nombre . " \r\n";
$message .= "Dirección: " . $direccion . " \r\n";
$message .= "Dieta: " . $dieta . " \r\n";
$message .= "Es alergico/a: " . $alergia . " \r\n";
$message .= "Nos recomienda la canción: " . $cancion . "\r\n"
$message .= "Enviado el: " . date('d/m/Y', time());



mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>