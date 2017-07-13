<?php

// los arreglos se puedes declarar con array
$nombres = array ('Alejandro','Sergio', 'Claudia');


// otra forma de crear arreglos es con corchetes
$animales = ['perro', 'gato', 'pez'];

//agregar elementos a un arreglo
array_push($nombres, 'Pablo');

// Traer un elemento determinado de un arreglo. recordar que los arreglos empiezan desde 0
$dato = $animales[1];
// Esto devolvera ´Sergio

// buscar si existe algun valor en un arreglo
// solo devuelve cierto o falso,es decir 1 o 0
$existe = in_array('Alejandro', $nombres);


//Eliminar un elemento de un arreglo
unset($nombres[1]);


 
require 'index.view.php';

