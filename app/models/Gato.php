<?php

require_once '../core/ConexionBD.php';

class Gato
{
	protected $IdGato;
	protected $Raza; //String
	protected $Color; //String

	function __construct($idGato, $raza, $color)
    {
       $this->IdGato = $idGato;
       $this->Raza = $raza;
       $this->Color = $color;       
	}

	public function getIdGato()
	{
		return $this->IdGato;
	}

	public function getRaza()
	{
		return $this->Raza;
	}

	public function getColor()
	{
		return $this->Color;
	}

	// Tenemos que hacer setters public para poder modificar los objetos
	public function setIdGato($IdGato)
	{
		$this->IdGato = $IdGato;
	}

	public function setRaza($Raza)
	{
		$this->Raza = $Raza;
	}

	public function setColor($Color)
	{
		$this->Color = $Color;
	}

	public static function getGato()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Animal WHERE Nombre = 'Perro'";		
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		// Recogemos el resultado y creamos el objeto Gato
		// $row = $result->fetch(PDO::FETCH_ASSOC);
		// $newGato = new Gato($row['IdAnimal'], $row['Nombre'], $row['Color']);
		// return $newGato;
		$ret = $result->fetch(PDO::FETCH_ASSOC);
		return $ret;
	}
}