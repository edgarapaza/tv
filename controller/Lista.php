<?php

function MostrarLista(){
	require "../model/accionesclass.php";
	$acciones = new Acciones();
	$dat = $acciones->ListadoSolicitudes();
	return $dat;
}

function MostrarNombre($codUsuario){
	$acciones = new Acciones();
	$nombre = $acciones->NombreUsuario($codUsuario);
	return $nombre;
}

function TipoSolicitud($codtipo){
	$acciones = new Acciones();
	$tipo = $acciones->TipoSolicitud($codtipo);
	return $tipo;
}

function Activos(){
	$activo=$acciones->ListadoActivos();
	return $activo;
}
 ?>