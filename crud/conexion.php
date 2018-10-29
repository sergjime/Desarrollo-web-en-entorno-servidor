<?php
	try{
	$conexion= new PDO('mysql:host=localhost; dbname=clientesdb', 'root', 'admingenius09');
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET UTF8");
	}catch(Exception $error){
		die('Error'. $error->getMessage());
		echo "Línea del error". $error->getLine();
	}
?>