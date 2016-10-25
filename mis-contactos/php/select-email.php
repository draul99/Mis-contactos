<?php 
	include("conexion.php");
	$consulta = "SELECT email FROM contactos ORDER BY email";
	
	$ejecutar_consulta = $conexion->query($consulta);

	while ($registro = $ejecutar_consulta->fetch_assoc()) {
		$email_select = utf8_encode($registro["email"]);
		echo "<option value = '$email_select'";
		if ($_GET["contacto_slc"] == $registro["email"]) {
			echo " selected";
		}
		echo "> $email_select</option>";
	}
	//$conexion->close();

?>