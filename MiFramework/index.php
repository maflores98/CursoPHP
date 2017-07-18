<?php

//-------------ARREGLOS ANIDADOS
// son arreglos que continen arreglos como elementos


	$tarea1 = array(
		'tarea' => 'Terminar el codigo',
		'asignado' => 'Sergio',
		'fecha' => '25 jul 2017',
		'completado' => false
		);


	$tarea2 = array(
		'tarea' => 'Revisar el codigo',
		'asignado' => 'Pablo',
		'fecha' => '27 jul 2017',
		'completado' => true
		);

	$tareas = array(
		$tarea1, $tarea2,
		array(
			'tarea' => 'Subir el codigo',
			'asignado' => 'Jessica',
			'fecha' => '27 jul 2017',
			'completado' => true
			)
		);

	require 'index.view.php';


