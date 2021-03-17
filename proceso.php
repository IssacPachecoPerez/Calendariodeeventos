<?php
session_start();

//Fichero de conexion con l base de datos
include_once("db.php");

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
$observaciones = filter_input(INPUT_POST, 'observaciones', FILTER_SANITIZE_STRING);
$inicio = filter_input(INPUT_POST, 'inicio', FILTER_SANITIZE_STRING);
$fin = filter_input(INPUT_POST, 'fin', FILTER_SANITIZE_STRING);


if(!empty($titulo) && !empty($color) && !empty($observaciones) && !empty($inicio) && !empty($fin)){
	//Convertir la fecha y la hora del formato
	$data = explode(" ", $inicio);
	list($date, $hora) = $data;
	$data_barra = array_reverse(explode("/", $date));
	$data_barra = implode("-", $data_barra);
	$inicio_barra = $data_barra . " " . $hora;
	
	$data = explode(" ", $fin);
	list($date, $hora) = $data;
	$data_barra = array_reverse(explode("/", $date));
	$data_barra = implode("-", $data_barra);
	$fin_barra = $data_barra . " " . $hora;
	
	$consulta_eventos = "INSERT INTO eventos (titulo, color, observaciones, inicio, fin) VALUES ('$titulo', '$color', '$observaciones','$inicio_barra', '$fin_barra')";
	$resultado_eventos = mysqli_query($conexion, $consulta_eventos);
	
	//Comprobar si guardó en la base de datos a través de "mysqli_insert_id" el cual comprueba si existe el ID del último dato insertado
	if(mysqli_insert_id($conexion)){
		$_SESSION['mensaje'] = "<div class='alert alert-success' role='alert'>El evento registrado con éxito<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span><button style='border:none; display:block;' type='button'><a href='minuta.php'>Subir minuta</a></button></button></div>";
		header("Location: eventos.php");
	}else{
		$_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>Error al registrar el evento<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: eventos.php");
	}
	
}else{
	$_SESSION['mensaje'] = "<div class='alert alert-danger' role='alert'>Error al registrar el evento 1 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	header("Location: eventos.php");
}