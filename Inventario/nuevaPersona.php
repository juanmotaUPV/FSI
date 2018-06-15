<?php
	if (!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"]))
		exit();

	include_once "base_de_datos.php";
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$sexo = $_POST["sexo"];

	$sentencia = $BD->prepare("INSERT INTO personas(nombre,apellidos,sexo) VALUES (?,?,?);");
	$resultado = $sentencia->execute([$nombre, $apellidos, $sexo]);

	if ($resultado==true) 
		echo "<b>INSERTADO CORRECTAMENTE<b>";
	else 
		echo "ALGO SALIO MAL. POR FAVOR";
?>
	