<?php


class Tarea {
	//dentro de una clase a la variables se les llama Aributos y a las Funciones se les llaman métodos
	private $id =5; 
	private $descripcion ='Esto es una tarea';
	private $asignado = 'Alejandro';
	private $completado =0;
	private $fecha = '2017-08-20';

//dentro de la clase se pueden hacer metodos que son funciones y que permiten accesar los miembros de la clase que fue declarado como privado

	

	//Constructor   se ejecuta automticamente al instanciar la clase en index.php
	//public function __construct()
	//{
		//este es un constructor vacio
	//}

	public function __construct($id, $descripcion, $asignado, $completado, $fecha)
	{
		//echo " Se ejecuto el constructor";
		$this->id = $id; 
		$this->descripcion = $descripcion;
		$this->asignado= $asignado;
		$this->compleatado=$completado;
		$this->fecha=$fecha;
	}

	public function verAsignado()
	{
  	     echo "El asignado es: " . $this->asignado;
		// la palabra reservada $this se usa para accesar a miembros dentro de a misma clase.
	}
    public function setId($valor)
	{
		$this->id = $valor;
	}
	public function getId()
	{
		return $this->id;
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
    public function setCompletado($valor)
	{
		$this->completado = $valor;
	}
	public function getCompletado()
	{
		return $this->completado;
	}
	public function setFecha($valor)
	{
		$this->fecha = $valor;
	}
	public function getFecha()
	{
		return $this->fecha;
	}


}