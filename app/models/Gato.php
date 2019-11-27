<?php

require_once '../core/ConexionBD.php';

class Gato
{
	protected $IdGato;
	protected $Raza; //String	
	protected $Descripcion; //String
	protected $Pelaje; //String

	/*function __construct($idGato, $raza, $descripcion, $pelaje)
    {
       $this->IdGato = $idGato;
       $this->Raza = $raza;	   
	   $this->Descripcion = $descripcion;
	   $this->Pelaje = $pelaje;
	}*/

	function __construct()
	{

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

	public function getDescripcion()
	{
		return $this->Descripcion;
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

	public function setDescripcion($descripcion)
	{
		$this->Descripcion = $descripcion;
	}


	public static function getAll()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Gato";	
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		$ret = $result->fetchAll(PDO::FETCH_CLASS, Gato::class);
		return $ret;
	}

	public function insert()
    {
        $db = ConexionDB::getDBconnection();
        $sql = $db->prepare('INSERT INTO Gato(IdGato, Raza, Descripcion, Pelaje) VALUES(:idGato, :raza, :descripcion, :pelaje)');
        $sql->bindValue(':idGato', $this->IdGato);
        $sql->bindValue(':raza', $this->Raza);
        $sql->bindValue(':descripcion', $this->Descripcion);
        $sql->bindValue(':pelaje', $this->Pelaje);
        return $sql->execute();
    }
}