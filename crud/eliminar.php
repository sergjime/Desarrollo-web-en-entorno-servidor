<?php
	include 'conexion.php';
    $id=$_GET['id'];
    $conexion->query("DELETE FROM cliente WHERE Id_Cliente = $id");
    header("Location: index.php");
?>