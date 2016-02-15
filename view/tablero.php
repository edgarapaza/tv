<?php
	include '../controller/Lista.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>
    <link href="../materialize/js/materialize.js" rel="stylesheet">
	
    <script type="text/javascript">
		function estado(id){
			var estado = document.getElementById(id).checked;
			if(estado == true)
			{
				location.href="estado.php?numSolicitud="+id;
			}else{
				location.href="estadFalse.php?estado=0&numSolicitud="+id;
			}
		}
	</script>
	
	<style>
		.espaciado{
			height:80px;
		}
	</style>

    <title>Notificaciones</title>

  </head>
<body>
  	<h1>Sistema</h1>
    <p>Sistema de Notificaciones - Archivo Regional de Puno</p>
    <table>
	<?php
	$data = MostrarLista();
	
	while ($fila=$data->fetch_assoc()) {
	
	if($fila['activo'] == 1)
	   {	
	   	$nombre = MostrarNombre($fila['codUsu']);
	   	$tipo   = TipoSolicitud($fila['codTipSol']);
		echo '
			<tr>
				<td>'.$fila['codSol'].'</td>
				<td>'.$nombre['nombre'].'</td>
				<td>'.$tipo['solicitudes'].'</td>
				<td><div class="switch"><label>NO PAGADO
					<input type="checkbox" checked="checked"'.' id="'.$fila['codSol'].'" onclick="estado('.$fila['codSol'].');"><span class="lever"></span>PAGADO</label></div>
				</div>
				<!-- Switch -->
			</td>
			';
		}
		else{
			
			echo '
			<tr>
				<td>'.$fila['codSol'].'</td>
				<td>'.MostrarNombre($fila['codUsu']).'</td>
				<td>'.TipoSolicitud($fila['codTipSol']).'</td>
				<td><div class="switch"><label>NO PAGADO
				<input type="checkbox"'.' id="'.$fila['codSol'].'" onclick="estado('.$fila['codSol'].');"><span class="lever"></span>PAGADO</label></div>
				</div>
				<!-- Switch -->
			</td>
			';
		}

	}
	
	?>
	</table>
	</body>
</html>