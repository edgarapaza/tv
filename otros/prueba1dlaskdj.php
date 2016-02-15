<?php
require 'coreapp/Conection.php';
$conn = new Conection();
$mysqli = $conn->conectar();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Notificaciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
	    <script src="materialize/js/materialize.min.js"></script>
        <script type="text/javascript">
			function estado(id){
				location.href="estado.php?estado="+id;
			}
		</script>
			<style>
			.espaciado{
				height:80px;
			}
		</style>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Necesita cambiar o Actualizar si navegador <strong>Obsoleto</strong> Cambielo!. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <p>Sistema de Notificaciones - Archivo Regional de Puno</p>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

	<div class="switch"><label>DESACTIVO<input type="checkbox" checked="checked"><span class="lever"></span>ACTIVO</label></div>

<form action="">
	<div class="espaciado"></div>
	<?php

	$busca=$mysqli->query('SELECT * FROM campos');
	echo "Numero de solicitudes: " . $busca->num_rows;
	while($fila = $busca->fetch_assoc()){
	    if($fila['activo'] == 1){
		echo '
			<div class="col m12 row">
				<div class="col m6">
					'.$fila['id'],'.  ',$fila['nombre'].'
				<div class="switch"><label>DESACTIVO
					<input type="checkbox" checked="checked"'.' id="'.$fila['id'].'" onclick="estado('.$fila['id'].');"><span class="lever"></span>ACTIVO</label></div>
				</div>
				<!-- Switch -->
				<div class="col m6">
					<input type="button" class="btn  blue lighten-3" value="CAMPO1"/>
					<input type="button" class="btn blue darken-1" value="CAMPO2"/>
					<input type="button" class="btn blue darken-1" value="CAMPO3"/>
					<input type="button" class="btn cyan darken-1" value="CAMPO4"/>
				</div>
			</div>
			';
			}

		else{
			echo '
			<div class="col m12 row">
				<div class="col m6">
					'.$fila['id'],'.  ',$fila['nombre'].'
				<div class="switch"><label>DESACTIVO
				<input type="checkbox"'.' id="'.$fila['id'].'" onclick="estado('.$fila['id'].');"><span class="lever"></span>ACTIVO</label></div>
				</div>
				<!-- Switch -->
				<div class="col m6">
					<input type="button" class="btn  blue lighten-3" value="CAMPO1"/>
					<input type="button" class="btn blue darken-1" value="CAMPO2"/>
					<input type="button" class="btn blue darken-1" value="CAMPO3"/>
					<input type="button" class="btn cyan darken-1" value="CAMPO4"/>
				</div>
			</div>
			';
			}

		}
	?>
</form>

	</body>
</html>
