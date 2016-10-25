<?php
	echo"************** CONECTAR DB ************** <br>";
	$conexionDB =  mysql_connect("localhost", "root", "") or die ("Error al Conectar Servidor <br>");
	echo "Conectado el Servidor <br>";

	mysql_select_db("mis_contactos") or die ("Error al seleccionar BD <br>");
	echo "DB Seleccionada <br>";

	echo"************** INSERTAR DATOS ************** <br>";

	$consulta = "INSERT INTO contactos() VALUES (
		'rmontengro777@gmail.com',
		'david',
		'm',
		'1994-07-07',
		'950853951',
		'9',
		'david.png')";

	//$ejecutar_consulta = mysql_query($consulta, $conexionDB);
	echo "Consulta INSERT Ejecutada <br>";

	echo"************** ELIMINAR DATOS ************** <br>";

	$consulta = "DELETE FROM contactos WHERE email = 'rmontengro777@gmail.com' ";
	//$ejecutar_consulta = mysql_query($consulta, $conexionDB);
	echo "Consulta DELETE Ejecutada <br>";

	echo"************** ACTUALIZAR DATOS **************<br>";

	$consulta = "UPDATE contactos SET nombre = 'arabella', nacimiento = '1998-04-13' WHERE email = 'rmontengro777@gmail.com' ";
	//$ejecutar_consulta = mysql_query($consulta, $conexionDB);
	echo "Consulta UPDATE Ejecutada <br>";

	echo"************** CONSULTA DATOS ************** <br>";
	
	$consulta = "SELECT * from contactos";
	$ejecutar_consulta = mysql_query($consulta, $conexionDB);
	echo "CONSULTA EJECUTADA <br>";

	while ($registro = mysql_fetch_array($ejecutar_consulta)) {
		echo 
		"E-Mail: " .$registro["email"]. "<br>" . 
		" Nombre: " .$registro["nombre"] . "<br>" .
		" Sexo: " .$registro["sexo"] . "<br>" .
		" Nacimiento: " .$registro["nacimiento"] . "<br>" .
		" Tel&eacute;fono: " .$registro["telefono"] ."<br>" .
		" Pais: " .$registro["pais"] . "<br>" .
		" Imagen: " .$registro["imagen"] . "<br>" .
		"************** <br> ";		
	}


	mysql_close($conexionDB);
	echo " <h2> Conexi&oacuten; Cerrada </h2>";
?>