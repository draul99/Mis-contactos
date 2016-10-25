<script type="text/javascript">
	window.onload = function(){
		var lista = document.getElementById("contacto-lista");
		lista.onchange = seleccionarContacto;
		function seleccionarContacto () {
			window.location = "?op=cambios&contacto_slc="+lista.value;
		}
	}
</script>
<form id="cambio-contacto" name="cambio-frm" action="php/modificar-contacto.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend> Cambio de Contacto</legend>
		<div>
			<label for="contacto-lista"> Contacto: </label>
			<select id="contacto-lista" class="cambio" name="contacto_slc" required>
				<option value=""> Select Contacto </option>
				<?php
					include("select-email.php");
				?>
			</select>
		</div>
		<?php
			if ($_GET["contacto_slc"]!= null) {
				$conexion2 = conectarse();
				$contacto  = $_GET["contacto_slc"];
				$consulta_contacto = "SELECT * FROM contactos WHERE email ='$contacto'";
				$ejecutar_consulta_contacto = $conexion2->query($consulta_contacto);
				$registro_contacto = $ejecutar_consulta_contacto->fetch_assoc();
				include("php/cambio-form.php");
			}
			include("php/mensajes.php");
		?>
	</fieldset>	
</form>