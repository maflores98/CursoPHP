<?php
require 'database/Connection.php';
require 'database/QryBuilder.php';
require 'functions.php';
require 'Tarea.php';
require 'Asignado.php';
 
$config = require 'config.php';

//$pdo = Connection::make(); 
// asi se invoca la funcion make de la clase Connection sin crear el objeto. 
//Los metodos estaticos se usan cuando la clase solo hara 1 cosa. Este proceso de reescribir las clases se conoce como REFACTOR.

//$qry = new QryBuilder($pdo);


//la notacion anterior tambien se puede escribir de la siguiente forma
return new QryBuilder(Connection::make($config['database']));
