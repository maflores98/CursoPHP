<?php
	
require 'functions.php';
require 'Tarea.php';

 $tarea1 = new Tarea(0, "Cambiar el objetivo de la tarea", "Sergio Perez", 0, "2017-08-01");
 
 $tarea2 = new Tarea(1,"Proponer plan de accion", "Alex Flores", 0, "2107/08/05");

//Se asignan datos
//$tarea1->setId(0);
//$tarea1->setDescripcion("Cambiar el objetivo de la tarea");
//$tarea1->setAsignado("Sergio Perez");
//$tarea1->setCompletado(0);
//$tarea1->setFecha("2017/08/01");

//$tarea2->setId(1);
//$tarea2->setDescripcion("Proponer plan de accion");
//$tarea2->setAsignado("Alex Flores");
//$tarea2->setCompletado(0);
//$tarea2->setFecha("2017/08/05");


echo $tarea1->getid(). "<br>";
echo $tarea1->getDescripcion(). "<br>";
echo $tarea1->getAsignado(). "<br>";
echo $tarea1->getCompletado(). "<br>";
echo $tarea1->getFecha(). "<br>";

echo $tarea2->getid(). "<br>";
echo $tarea2->getDescripcion(). "<br>";
echo $tarea2->getAsignado(). "<br>";
echo $tarea2->getCompletado(). "<br>";
echo $tarea2->getFecha(). "<br>";




//dd($tareas);



//require 'index.view.php';

