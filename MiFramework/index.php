<?php

// arreglos asociativos
// funcionan con datos llave --> valor


$persona= array(
	'nombre' => 'Alejandro',
	'edad' => 40,
	'sexo' => 'Masculino'
	);


//actualziar un valor del arreglo
$persona['edad'] = 50;

//agregar un elemento al arreglo
$personal['telefono'] = '21225600';

//eliminar un elemento del arreglo
unset($persona['sexo']);




//-------------ARREGLOS ANIDADOS
// son arreglos que continen arreglos como elementos


	$tarea1 = array(
		'Tarea' => 'Terminar el codigo',
		'Asignado' => 'Sergio',
		'Fecha' => '25 jul 2017'
		);


	$tarea2 = array(
		'Tarea' => 'Revisar el codigo',
		'Asignado' => 'Pablo',
		'Fecha' => '27 jul 2017'
		);

	$tareas = array(
		$tarea1, $tarea2,
		array(
			'Tarea' => 'Subir el codigo',
			'Asignado' => 'Jessica',
			'Fecha' => '27 jul 2017'
			)
		);

	require 'index.view.php';


