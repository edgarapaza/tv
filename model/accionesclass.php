<?php

class Acciones
{
	private $conn;

	function __construct()
	{
		require_once("../coreapp/Conection.php");
		$conection = new Conection();
		$this->conn = $conection->Conectar();
		return $this->conn;
	}

	
	public function InsertarActiva($numSol)
	{
		$sql = "INSERT INTO atencion (numSol, activo) VALUES ('{$numSol}', 1);";
		$this->conn->query($sql);
	}
	
	public function Desactivar($activo, $numSol )
	{
		$sql_insert = "INSERT INTO atencion (numSol, activo) VALUES ('{$numSol}', 1) LIMIT 1;";
		
		$sql = "UPDATE atencion SET activo = '$activo' WHERE atencion.idatencion = $id LIMIT 1;";
		$this->conn->query($sql) or die($mysqli->error());
	}

	public function ListadoSolicitudes()
	{
		//$sql = "SELECT idatencion, activo, numSol FROM atencion";
		//$fecha = date('Y-m-d');
		$fecha = "2016-02-11";
		$sql = "SELECT codSol, codUsu, codTipSol, idSol, activo FROM solicitudes WHERE fecCreacion LIKE '$fecha%';";
		$data = $this->conn->query($sql);
		return $data;
	}
	
	
	public function ListadoActivos()
	{
		$sql = "SELECT idatencion, activo, numSol FROM atencion";
		$data = $this->conn->query($sql);
		return $data;
	}
	
	public function NombreUsuario($codUsuario)
	{
		$sql = "SELECT CONCAT(nombre, ' ', apePat, ' ', apeMat) as nombre FROM usuarios WHERE  codUsu = $codUsuario;";
		$data = $this->conn->query($sql);
		$fila = $data ->fetch_assoc();
		return $fila;
	}
	
	
	public function TipoSolicitud($tipSol)
	{
	$sql = "SELECT solicitud FROM tipsolicitud WHERE codTipSol = $tipSol";
	$data = $this->conn->query($sql);
	$fila = $data ->fetch_assoc();
	return $fila;
	}
}
?>