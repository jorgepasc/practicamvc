<?php

require_once '../core/ConexionBD.php';

class Tiburon
{
	protected $IdTiburon;
	protected $Raza; //String
	protected $Aleta; //String
	protected $Descripcion; //String


	function __construct($idTiburon, $raza, $descripcion, $aleta)
    {
       $this->IdTiburon = $idTiburon;
	   $this->Raza = $raza;	   
	   $this->Descripcion = $descripcion;
	   $this->Aleta = $aleta;
	}

	public function getIdTiburon()
	{
		return $this->IdTiburon;
	}

	public function getRaza()
	{
		return $this->Raza;
	}

	public function getAleta()
	{
		return $this->Aleta;
	}

	public function getDescripcion()
	{
		return $this->Descripcion;
	}

	// Tenemos que hacer setters public para poder modificar los objetos
	public function setIdTiburon($IdTiburon)
	{
		$this->IdTiburon = $IdTiburon;
	}

	public function setAleta($Aleta)
	{
		$this->Aleta = $Aleta;
	}

	public function setRaza($Raza)
	{
		$this->Raza = $Raza;
	}

	public static function getTiburon()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Tiburon";		
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		$ret = $result->fetch(PDO::FETCH_ASSOC);
		return $ret;
	}
}