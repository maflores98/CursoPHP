<?php
	
require 'functions.php';
require 'Tarea.php';
require 'Asignado.php';
 

$pdo =conectarBD();
$tareas =listaTareas($pdo);
$asignados=listaAsignados($pdo);


//dd($tareas);

/*
echo $tareas[0]->getId()."<br>";
echo $tareas[0]->getdescripcion()."<br>";
echo $tareas[0]->getasignado()."<br>";
echo $tareas[0]->getcompletado()."<br>";
echo $tareas[0]->getfecha()."<br>";

echo $asignado[0]->getId()."<br>";
echo $asignado[0]->getNombre()."<br>";
echo $asignado[0]->getPuesto()."<br>";
*/

require 'index.view.php';

