<?php


class Tarea {
	//dentro de una clase a la variables se les llama Aributos y a las Funciones se les llaman métodos
	private $id; 
	private $descripcion;
	private $asignado;
	private $completado;
	private $fecha;

//dentro de la clase se pueden hacer metodos que son funciones y que permiten accesar los miembros de la clase que fue declarado como privado

	

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