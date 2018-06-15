<?php

	$contraseña = "";
	$usuario = "root";
	$BDName = "crud";
	try{
		$BD = new PDO('mysql:host=localhost;dbname=' . $BDName, $usuario, $contraseña);
	}catch (Exception $e){
		echo "Ocurrio algo con la base de datos: " . $e->getMessage();
	}
	?>