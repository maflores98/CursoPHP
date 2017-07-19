<?php
	
require 'functions.php';
//se crea el objeto que se usara en a clase

// invoca la funcion para conectar la BD
$pdo = conectarBD(); 
//invoca la funcion para recuperar las tareas y el resultado lo guarda en la variable $tareas
$tareas= listatareas($pdo);

$tareasC = listatareascompletadas($pdo);

echo $tareas[0]['descripcion'];
echo $tareas[1]['descripcion'];
echo $tareas[2]['descripcion'];
echo $tareas[3]['descripcion'];

echo $tareasC[0]['descripcion'];
echo $tareasC[1]['descripcion'];



//dd($tareas);



require 'index.view.php';

