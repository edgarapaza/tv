<?php

require_once("../coreapp/Conection.php");

$conn = new Conection();
$mysqli = $conn->Conectar();

$activo = 0;
$id = 1;

$sql = "UPDATE campos SET activo = '$activo' WHERE campos.id = $id LIMIT 1;";
$mysqli->query($sql) or die($mysqli->error());

?>
