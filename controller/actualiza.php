<?php
include ("../model/accionesclass.php");
$acciones = new Acciones();

$estado = $_REQUEST['estado'];
$codigo = $_REQUEST['codigo'];

$acciones->Actualizar($estado,$codigo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		<input type="text" name="estado" placeholder="Estado 0 o 1">
		<input type="text" name="codigo" placeholder="Codigo Usuario">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
