<?php
 	$destino="administracion@g-social.com,g.social.vzla@gmail.com";
 	$nombre = $_POST["nombreform"];
 	$correo = $_POST["emailform"];
 	$mensaje = $_POST["mensajeform"];
 	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

 	mail($destino,"Formulario-contacto", $contenido);
 	header("location:gracias.html");

?>