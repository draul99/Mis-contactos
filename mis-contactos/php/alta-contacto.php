<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend> Alta de Contactos</legend>
		<div>
			<label for="email"> E-Mail: </label>
			<input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu e-Mail" title="Escribe un email valido" required>
		</div>
		<div>
			<label for="nombre"> Nombre: </label>
			<input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu Nombre" title="Tu nombre" required>
		</div>
		<div>
			<label for="m"> Sexo: </label>
			&nbsp;&nbsp;
			<input type="radio" id="m" name="sexo_rdo" title="Tu Sexo" value="M" required>
			<label for="m"> Masculino</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sexo_rdo" title="Tu Sexo" value="F" required>
			<label for="f"> Femenino</label>
		</div>
		<div>
			<label for="nacimiento">Fecha Nacimiento: </label>
			<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" placeholder="Escribe tu Fecha de Nacimiento" title="Fecha de Nacimiento" required>
		</div>
		<div>
			<label for="telefono">Tel&eacute;fono: </label>
			<input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Escribe tu Tel&eacute;fono" title="Tel&eacute;fono" required>
		</div>
		<div>
			<label for="pais">Pais: </label>
				<select id="pais" class="cambio" name="pais_slc" required>
					<option value=""> Selecciona tu País </option>
					<?php 
						include("select-pais.php");
					?>
				</select>
		</div>
		<div>
			<label for="foto">Foto: </label>
			<div class="adjuntar-archivo cambio">
				<input type="file" id="foto" name="imagen_fls" title="Sube tu Foto">
			</div>
		</div>
		<div>
			<input type="submit" name="enviar_btn" id="enviar-alta" class="cambio" value="Agregar">
		</div>
		<?php  
			include("php/mensajes.php");
		?>
	</fieldset>
</form>