
<?php
class Asignado
{
	private $id;
	private $nombre;
	private $puesto;

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setPuesto($puesto)
	{
		$this->puesto = $puesto;
	}
	public function getPuesto()
	{
		return $this->puesto;
	}
}
