<?php
include '../controller/Lista.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>
<script src="../materialize/js/materialize.min.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body onLoad="setInterval('location.reload()',10000)">
<div class="blue">
<h2 align="center">LISTA DE DOCUMENTOS PARA BUSQUEDA</h2></div>
<div class="light-blue">
<?php
	$data = MostrarLista();
	while ($fila = $data->fetch_assoc()) 
	{
		if($fila['activo']==1){
		echo '
			<div class="col m12 row">
				<div class="col m8 s8" align="center">
					  '.$fila['numSol'].'
				</div>
				<div class="col m4 s4" align="left">
					<input type="button" class="btn light-green" value="ENVIAR" >
				</div> 
			</div>
					
		';	
		}
	}
?>

</body>
</html>