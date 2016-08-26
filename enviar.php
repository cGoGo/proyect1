<?php 
	$destino = "club@chilito.cl";
	$nombre  = $_POST["nombre"];
	$correo  = $_POST["correo"];
	$origen  = $_POST["origen"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nOrigen: " . $origen;
	mail($destino,"contacto", $contenido);
	header("Location:bienvenido.html")

?>