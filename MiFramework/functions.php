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
	$tareas = $sentencia->fetchAll();
	return $tareas;
}


function listaTareasCompletadas($base) {
	//prepara la sentencia para su ejecucion
	$sentencia = $base->prepare('Select * from tareas where completado = 1');
	// ejecuta la sentencia preparada
	$sentencia-> execute();
	//guarda los datos recuperados
	$tareas = $sentencia->fetchAll();
	return $tareas;
}