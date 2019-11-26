<?php

require_once '../core/ConexionBD.php';

class Loro
{
	protected $IdLoro;
	protected $Raza; //String
	protected $Pluma; //String
	protected $Descripcion; //String


	function __construct($idLoro, $raza, $descripcion, $pluma)
    {
       $this->IdLoro = $idLoro;
	   $this->Raza = $raza;	   
	   $this->Descripcion = $descripcion;
	   $this->Pluma = $pluma;
	}

	public function getIdLoro()
	{
		return $this->IdLoro;
	}

	public function getRaza()
	{
		return $this->Raza;
	}

	public function getPluma()
	{
		return $this->Pluma;
	}

	public function getDescripcion()
	{
		return $this->Descripcion;
	}

	// Tenemos que hacer setters public para poder modificar los objetos
	public function setIdLoro($IdLoro)
	{
		$this->IdLoro = $IdLoro;
	}

	public function setPluma($pluma)
	{
		$this->Pluma = $pluma;
	}

	public function setRaza($Raza)
	{
		$this->Raza = $Raza;
	}

	public static function getLoro()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Loro";		
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		$ret = $result->fetch(PDO::FETCH_ASSOC);
		return $ret;
	}
}