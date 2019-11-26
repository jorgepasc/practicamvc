<?php

require_once '../core/ConexionBD.php';

class Gato
{
	protected $IdGato;
	protected $Raza; //String
	protected $Pelaje; //String
	protected $Descripcion; //String

	function __construct($idGato, $raza, $pelaje, $descripcion)
    {
       $this->IdGato = $idGato;
       $this->Raza = $raza;
	   $this->Pelaje = $pelaje;
	   $this->Descripcion = $descripcion;
	}

	public function getIdGato()
	{
		return $this->IdGato;
	}

	public function getRaza()
	{
		return $this->Raza;
	}

	public function getPelaje()
	{
		return $this->Pelaje;
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

	public function setPelaje($pelaje)
	{
		$this->Pelaje = $pelaje;
	}

	public static function getGato()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Gato";		
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		$ret = $result->fetch(PDO::FETCH_ASSOC);
		return $ret;
	}
}