<?php 
	$destino = "hola@chilito.cl";
	$nombre  = $_POST["nombre"];
	$correo  = $_POST["correo"];
	$origen  = $_POST["origen"];
	$com  = $_POST["com"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nOrigen: " . $origen . "\nComentario: " . $com;
	mail($destino,"contacto", $contenido);
	header("Location:bienvenido2.html")

?>