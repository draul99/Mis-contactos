<br>
<div>
	<input type="hidden" name="op" value="consultas">
	<label for="buscador"> Buscador: </label>
	<input type="search" name="buscador_srh" id="buscador" class="cambio" placeholder="Escribe tu busqueda" title="Tu busqueda" required >
</div>
<input type="submit" name="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">




<?php
	if ($_GET["buscador_srh"] != null) {
		$buscador = $_GET["buscador_srh"];
		$consulta = "SELECT * FROM contactos WHERE MATCH(email, nombre, sexo, telefono, pais) AGAINST('$buscador' IN BOOLEAN MODE)";
		include("tabla-resultados.php");
	}

	//$consulta = "SELECT * FROM contactos";
	//include("php/tabla-resultados.php");
	
?>