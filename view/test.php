<?php 
include '../controller/Lista.php';

$data = MostrarLista();

while ($fila = $data->fetch_assoc()) {
	echo $fila['activo']."<br>";
}

 ?>