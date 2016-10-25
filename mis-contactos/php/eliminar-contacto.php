<?php  
	$email = $_POST["email_slc"];
	include("conexion.php");
	$consulta = "DELETE FROM contactos WHERE email='$email'";
	$ejecutar_consulta = $conexion->query($consulta);

	if ($ejecutar_consulta) {
		$mensaje = "Se Elimino el contacto <b>$email</b>";
	} else {
		$mensaje = "El Contacto <b> $email</b> no se pudo eliminar";
	}
	$conexion->close();
	header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>