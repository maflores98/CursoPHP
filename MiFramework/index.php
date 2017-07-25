<?php
	
$qry=require 'bootstrap.php';

//$pdo =conectarBD();
$tareas=$qry->selectAll('tareas1', 'Tarea');
$asignados=$qry->selectAll('asignados', 'Asignado');

//dd($tareas);



require 'index.view.php';

