<?php

//este archivo 
//$pdo =conectarBD();
$tareas=$app['db']->selectAll('tareas', 'Tarea');
$asignados=$app['db']->selectAll('asignados', 'Asignado');

//dd($tareas);



require __DIR__ . '/../views/index.view.php';