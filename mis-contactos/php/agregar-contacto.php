<?php  
	$email = $_POST["email_txt"];
	$nombre = $_POST["nombre_txt"];
	$sexo = $_POST["sexo_rdo"];
	$nacimiento = $_POST["nacimiento_txt"];
	$telefono = $_POST["telefono_txt"];
	$pais = $_POST["pais_slc"];

	$imagen_generica = ($sexo == 'M')?"amigo.png":"amiga.png";

	include("conexion.php");
	$consulta = "SELECT * FROM contactos WHERE email ='$email'";
	$ejecutar_consulta = $conexion->query($consulta);
	$num_regs = $ejecutar_consulta->num_rows;

	if($num_regs == 0){
		include("funciones.php");
		$tipo = $_FILES["imagen_fls"]["type"];
		$archivo = $_FILES["imagen_fls"]["tmp_name"];
		$subio_imagen = subir_imagen($tipo, $archivo, $email);
		$imagen = empty($archivo)?$imagen_generica:$subio_imagen;
		$consulta = "INSERT INTO contactos() values(
		'$email',
		'$nombre',
		'$sexo',
		'$nacimiento',
		'$telefono',
		'$pais',
		'$imagen')";
		$ejecutar_consulta = $conexion->query(utf8_encode($consulta));
		if ($ejecutar_consulta){
			$mensaje = "Se ha dado de alta al contacto con el email <b>$email</b>";
		} else{
			$mensaje = "No se pudo dar de alta al contacto con el <b>$email</b>";
		}
	}else{
		$mensaje = "No se pudo dar de alta al contacto <b>$email</b> porque ya existe";
	}

	$conexion->close();
	header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>