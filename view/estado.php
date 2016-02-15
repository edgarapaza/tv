
<?php
include ("../model/accionesclass.php");
$acciones = new Acciones();

$codigo = $_REQUEST['numSolicitud'];
$acciones->InsertarActiva($codigo);
header("Location: tablero.php");
?>

