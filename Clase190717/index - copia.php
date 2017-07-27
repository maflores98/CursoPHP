<?php
	
require 'functions.php';
//se crea el objeto que se usara en a clase

// invoca la funcion para conectar la BD
//$pdo = conectarBD(); 

//invoca la funcion para recuperar las tareas y el resultado lo guarda en la variable $tareas

//$tareas= listatareas($pdo);
//$tareasC = listatareascompletadas($pdo);


//1o.- Generamos la clase
class Tarea {
	//dentro de una clase a la variables se les llama Aributos y a las Funciones se les llaman métodos
	private $id =5; 
	private $descripcion ='Esto es una tarea';
	private $asignado = 'Alejandro';
	private $completado =0;
	private $fecha = '2017-08-20';

//dentro de la clase se pueden hacer metodos que son funciones y que permiten accesar los miembros de la clase que fue declarado como privado

	public function verAsignado()
	{

		echo "El asignado es: " . $this->asignado;
		// la palabra reservada $this se usa para accesar a miembros dentro de a misma clase.
	}

	public function setDescripcion($valor)
	{
		$this->descripcion = $valor;
	}
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setAsignado($valor)
	{
		$this->asignado = $valor;
	}
	public function getAsignado()
	{
		return $this->asignado;
	}

}
// Si los atributos son publicos se pueeden acceder a ellos desde fuera de la clase, si son privados solo pueden ser usados dentro de la clase


//2do. Generamos los objetos de la clase
 $tarea1 = new Tarea();
 $tarea2 = new Tarea();

//3o se puede consultar algun atributo de la clase
echo $tarea1->getdescripcion(). "<br>";
echo $tarea2->getdescripcion(). "<br>";




// tambien podemos asigar un valor a algun atributo
$tarea1->setDescripcion("Cambiar el objetivo de la tarea");
$tarea2->setAsignado("Lorena Herrera");

echo $tarea1->getdescripcion(). "<br>";
echo $tarea1->getasignado(). "<br>";

echo $tarea2->getdescripcion();
echo $tarea2->getasignado(). "<br>";

$tarea1->verAsignado();
$tarea2->verAsignado();


//dd($tareas);



//require 'index.view.php';

