<?php

require_once '../core/ConexionBD.php';

class Loro
{
	protected $IdLoro;
	protected $Raza; //String
	protected $Pluma; //String
	protected $Descripcion; //String


	function __construct()
    {
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

	public function setDescripcion($Descripcion)
	{
		$this->Descripcion = $Descripcion;
	}

	public static function getById($id)
	{
		$connection = ConexionDB::getDBconnection();
        $sql = $connection->prepare('SELECT * FROM Loro WHERE IdLoro = :id');
        $sql->execute(array(':id' => $id));
        $sql->setFetchMode(PDO::FETCH_CLASS, Loro::class);    
        return $sql->fetch(PDO::FETCH_CLASS);
	}

	public static function getAll()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Loro";	
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		$ret = $result->fetchAll(PDO::FETCH_CLASS, Loro::class);
		return $ret;
	}

	public function insert()
    {
        $db = ConexionDB::getDBconnection();
        $sql = $db->prepare('INSERT INTO Loro(IdLoro, Raza, Descripcion, Pluma) VALUES (:idLoro, :raza, :descripcion, :pluma)');
        $sql->bindValue(':idLoro', $this->IdLoro);
        $sql->bindValue(':raza', $this->Raza);
        $sql->bindValue(':descripcion', $this->Descripcion);
        $sql->bindValue(':pluma', $this->Pluma);
        return $sql->execute();
	}
	
	public static function delete($id)
	{ 
		$db = ConexionDB::getDBconnection();
        $sql = $db->prepare('DELETE FROM Loro WHERE IdLoro = :id');
		$sql->bindValue(':id', $id);
        return $sql->execute();
	}

	public static function update($id, $raza, $descripcion, $pluma)
	{
		$db = ConexionDB::getDBconnection();
        $sql = $db->prepare('UPDATE Loro SET IdLoro = :id, Raza = :raza, Descripcion = :descripcion, Pluma = :pluma WHERE IdLoro = :id');
        $sql->bindValue(':id', $id);
        $sql->bindValue(':raza', $raza);
        $sql->bindValue(':descripcion', $descripcion);
		$sql->bindValue(':pluma', $pluma);
        return $sql->execute();
	}
}