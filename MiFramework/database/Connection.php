<?php


//los metodos estaticos se pueden ejectar sin tener que crera objetos
class Connection
{
	public static function make ($config)
	//Para hacer un metodo estatico solo se agrega la palabra static en el nombre de la funcion.
	{
	    try 
	    {
			//$pdo= new PDO('mysql:host=127.0.0.1;dbname=tareas','root','');

			//PDO($cadena, $user, $pass, $options)
			$pdo = new PDO(
				$config['type'] . ':host=' . $config['host'] .';dbname=' .$config['name'] , 
				$config['user'], 
				$config['pass']
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
				//AL indicar estas opciones se activan los mensajes de error de la base de datos.
				);
			return $pdo;
		} 
		catch(PDOException $e) 
		{
		   	dd($e->getmessage());
		}
	}
}




