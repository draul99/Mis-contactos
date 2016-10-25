<?php 
if (empty($_GET["pais_slc"])) {
	include("conexion.php");
}	
	include("funciones.php");
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;

	if ($num_regs == 0) {
		echo "<br><br><span claas = 'mensajes'> No se encontraron registros en la busqueda <span/><br><br>";
	} else {
		?>
		<br><br>
		<table>
			<thead>
				<tr>
					<th> E-Mail </th>
					<th> Nombre </th>
					<th> Sexo </th>
					<th> Nacimiento </th>
					<th> Tel&eacute;fono </th>
					<th> Pa&iacute;s</th>
					<th> Imagen </th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while ($registro = $ejecutar_consulta->fetch_assoc()) {
				?>
					<tr>
						<td> 
							<?php echo utf8_decode($registro["email"]); ?>
						</td>
						<td> 
							<?php echo utf8_decode($registro["nombre"]); ?>
						</td>
						<td> 
							<?php echo ($registro["sexo"]=="M")?"Masculino":"Femenino"; ?>
						</td>
						<td> 
							<?php echo utf8_decode($registro["nacimiento"]); ?>
						</td>
						<td> 
							<?php echo utf8_decode($registro["telefono"]); ?>
						</td>
						<td> 
							<?php echo utf8_encode($registro["pais"]); ?>
						</td>
						<td> 
							<img src="img/fotos/<?php echo utf8_decode($registro["imagen"]); ?>" />
						</td>

					</tr>
				<?php	
				}
				?>
			</tbody>
		</table>

	<?php
	}

	$conexion->close();
?>