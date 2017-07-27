<?php
require 'database/Connection.php';
require 'database/QryBuilder.php';
require 'Router.php';
require 'Request.php';

require __DIR__ . '/../functions.php';
// __DIR__ deveulve la ruta hasta donde se encutra el archivo
require __DIR__ . '/../Tarea.php';
require __DIR__ . '/../Asignado.php';
 
$app = array();
$app ['config'] = require 'config.php';
$app ['db']= new QryBuilder(Connection::make($app['config']['database']));

//$pdo = Connection::make(); 
// asi se invoca la funcion make de la clase Connection sin crear el objeto. 
//Los metodos estaticos se usan cuando la clase solo hara 1 cosa. Este proceso de reescribir las clases se conoce como REFACTOR.

//$qry = new QryBuilder($pdo);





