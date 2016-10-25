<form id="baja-contacto" name="baja-frm" action="php/eliminar-contacto.php" method="post" enctype="application/x-www-form.urlencoded">
	<fieldset>
		<legend> Baja Contacto </legend>
		<div>
			<label for="email"> EMail: </label>
			<select id="email" class="cambio" name="email_slc" required>
				<option>Seleciona el Email</option>
				<?php 
				include("select-email.php");
			?>
			</select>
		</div>
		<div>
			<input type="submit" name="enviar_btn" id="enviar-baja" class="cambio" value="Eliminar">
		</div>
		<?php 
			include("php/mensajes.php");
		?>
	</fieldset>
</form>