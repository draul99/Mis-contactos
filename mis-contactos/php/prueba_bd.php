<?php
	//Pasos para conectarme a una DB MySQL con PHP
	// 1) conectarme a la DB, mysql_connect:
		//Servidor
		//Usuario
		//Password
//mysql_connect (servidor, usuario, pass) or die ("Error");

	$conexion = mysql_connect("localhost", "root", "") or die("No se pudo conectar con el servidor de la DB");
	echo("Conectado <br>");

	//2) Seleccionar la base de datos con la que vamos a trabajar

	mysql_select_db("mis_contactos") or die("No se puedo conectar o seleccionar a la DB");
	echo "Base de datos Seleccionada <br>";

	//3) crear consulta SQL

	$consulta = "SELECT * FROM pais";

	//4) ejecutar consulta SQL
	//mysql_query(consultaSQL, conexionDB);

	$ejecutar_consulta = mysql_query($consulta, $conexion) or die("No se pudo ejecutar la consulta en la DB");
	echo("Se ejecut&oacute; la Consulta <br>");

	//5) mostrar el resultado de ejecutar la consulta
	//mysql_fetch_array devuelve los datos en un arreglo

	while ($registro = mysql_fetch_array($ejecutar_consulta)) {
		echo "" .$registro["id_pais"]. 
		" Nombre: " . $registro["pais"] . "<br>";		
	}

	//6) cerrar la conexion

	mysql_close($conexion) or die ("Ocurri&oacute; al cerrar la DB");
	echo "Conexi&oacute;n cerrada";
?>