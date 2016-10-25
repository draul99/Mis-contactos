<div>
	<label for="email"> E-Mail: </label>
	<input disabled type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu e-Mail" title="Escribe un email valido" value="<?php 
	echo $registro_contacto["email"]; 
	?>" required>
	<input type="hidden" name="email_hdn" value="<?php
		echo $registro_contacto["email"];
	?>">
</div>
<div>
	<label for="nombre"> Nombre: </label>
	<input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu Nombre" title="Tu nombre" value="<?php 
	echo $registro_contacto["nombre"]; 
	?>" required>
</div>
<div>
	<label for="m"> Sexo: </label>
	&nbsp;&nbsp;
	<input type="radio" id="m" name="sexo_rdo" title="Tu Sexo" value="M" <?php if ($registro_contacto["sexo"] == "M") {
		echo "checked";
	} ?> required>
	<label for="m"> Masculino</label>
	&nbsp;&nbsp;&nbsp;
	<input type="radio" id="f" name="sexo_rdo" title="Tu Sexo" value="F" <?php if ($registro_contacto["sexo"] == "F") {
		echo "checked";
	} ?> required>
	<label for="f"> Femenino</label>
</div>
<div>
	<label for="nacimiento">Fecha Nacimiento: </label>
	<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" placeholder="Escribe tu Fecha de Nacimiento" title="Fecha de Nacimiento" value="<?php
		echo $registro_contacto["nacimiento"];
	?>" required>
</div>
<div>
	<label for="telefono">Tel&eacute;fono: </label>
	<input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Escribe tu Tel&eacute;fono" title="Tel&eacute;fono" value="<?php
		echo $registro_contacto["telefono"];
	?>" required>
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
		<input type="hidden" name="imagen_hdn" value="<?php
		echo $registro_contacto["imagen"];
	?>">
	</div>
	<div>
		<img src="<?php 
			echo "img/fotos/".$registro_contacto["imagen"];
		?>">
	</div>
</div>
<div>
	<input type="submit" name="enviar_btn" id="enviar-cambio" class="cambio" value="Modificar">
</div>
<?php  
		include("php/mensajes.php");
?>