<?php

function dd($arreglo)
{
 echo '<pre>';
 var_dump($arreglo);
 echo '</pre>';
 die();
}


function suma($a,$b)
{
	return $a + $b;
}



//funcion para conectar a una base de datos
function conectarBD ()
{
	try {
		$pdo= new PDO('mysql:host=127.0.0.1;dbname=tareas','root','');
		return $pdo;
		} 
		catch(PDOException $e) 
		{
	   	dd($e->getmessage());
	 // con el operador -> se invocan las funciones de la clase 
	}
}

// funcion para leer y regrrsar la lista de tareas
function listaTareas($base) {
	//prepara la sentencia para su ejecucion
	$sentencia = $base->prepare('Select * from tareas');
	// ejecuta la sentencia preparada
	$sentencia-> execute();
	//guarda los datos recuperados
	$tareas = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Tarea');
	return $tareas;
		
}




function listaAsignados($base) {
	//prepara la sentencia para su ejecucion
	$sentencia = $base->prepare('Select * from asignados');
	// ejecuta la sentencia preparada
	$sentencia-> execute();
	//guarda los datos recuperados
	$asignado = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Asignado');
	return $asignado;
}