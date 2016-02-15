<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$datos = array(
	"server" => "127.0.0.1",
	"user" => "root",
	"pass" => "root",
	"database" => "dillman1"
);
//NO TOCAR DESDE ESTE PUNTO SI NO SABES PHP//
$datos['conexion'] = mysql_connect($datos['server'], $datos['user'], $datos['pass'])or die("No se ha podido conectar al servidor MySQL.");
mysql_select_db($datos['database'], $datos['conexion'])or die("La base de datos no existe.");
	if(!isset($_GET['subir'])) {
		$con = mysql_query("SELECT * FROM alertas");
		while($m = mysql_fetch_array($con)) {
			$tiempo = time() - $m['time'];
			$lsk = mysql_query("SELECT * FROM vistas WHERE idalert = ".$m['id']." AND ip = '".$_SERVER['REMOTE_ADDR']."'");
			if($tiempo < 60) {
				if(mysql_num_rows($lsk) == 0) {
					echo "<script> \n";
					echo "	alert(\"".htmlspecialshars($m['texto'])."\");";
					echo "\n</script>\n";
					mysql_query("INSERT INTO vistas (idalert, ip) VALUES (".$m['id'].", '".$_SERVER['REMOTE_ADDR']."')");
				}
			} else {
				mysql_query("DELETE FROM alertas WHERE id = '".$m['id']."'");
				mysql_query("DELETE FROM vistas WHERE idalert = '".$m['id']."'");
			}
		}
	} else {
		if(!isset($_POST['enviar'])) {
?>
<form action="" method="post">
	<textarea id="texto" name="texto"></textarea><br />
	<input type="submit" id="enviar" name="enviar" />
</form>
<?php
		} else {
			if(!empty($_POST['texto'])) {
				mysql_query("INSERT INTO alertas (texto, time) VALUES ('".$_POST['texto']."', '".time()."')");
				echo "Alerta enviada";
			} else {
				echo "Llena el campo de texto";
			}
		}
	}
?>


</body>
</html>
