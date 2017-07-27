<?php

Class QryBuilder
{
	private $pdo;
	public function __construct($pdo)
		{
			$this->pdo=$pdo;
		}

	public function selectAll ($table, $intoClass)
	{
		$sentencia = $this->pdo->prepare("Select * from {$table}");
		// ejecuta la sentencia preparada
		$sentencia->execute();
		//guarda los datos recuperados
		return $sentencia->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}	
}
