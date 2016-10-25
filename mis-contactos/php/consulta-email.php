<br>
<div>
	<input type="hidden" name="op" value="consultas">
	<label for="email"> E-Mail: </label>
	<input type="email" name="email_txt" id="email" class="cambio" placeholder="Escribe tu email" title="Tu email" required >
</div>
<input type="submit" name="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">




<?php
	if ($_GET["email_txt"] != null) {
		$email = $_GET["email_txt"];
		$consulta = "SELECT * FROM contactos WHERE email like '%$email%'";
		include("tabla-resultados.php");
	}

	//$consulta = "SELECT * FROM contactos";
	//include("php/tabla-resultados.php");
	
?>