<?php

require_once '../core/ConexionBD.php';

class Tiburon
{
	protected $IdTiburon;
	protected $Raza; //String
	protected $Aleta; //String
	protected $Descripcion; //String

/*
	function __construct($idTiburon, $raza, $descripcion, $aleta)
    {
       $this->IdTiburon = $idTiburon;
	   $this->Raza = $raza;	   
	   $this->Descripcion = $descripcion;
	   $this->Aleta = $aleta;
	}*/

	function __construct()
	{
		
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

	/* METODOS ESTATICOS */

	public static function getById($id)
	{
		$connection = ConexionDB::getDBconnection();
        $sql = $connection->prepare('SELECT * FROM Tiburon WHERE IdTiburon = :id');
        $sql->execute(array(':id' => $id));
        $sql->setFetchMode(PDO::FETCH_CLASS, Tiburon::class);    
        return $sql->fetch(PDO::FETCH_CLASS);
	}

	public static function getAll()
	{
		$connection = ConexionDB::getDBconnection();
		$sql = "SELECT * FROM Tiburon";	
		// Ejecutamos la consulta
		$result = $connection->query($sql);
		$ret = $result->fetchAll(PDO::FETCH_CLASS, Tiburon::class);
		return $ret;
	}

	public function insert()
    {
        $db = ConexionDB::getDBconnection();
        $sql = $db->prepare('INSERT INTO Tiburon(IdTiburon, Raza, Descripcion, Aleta) VALUES(:idTiburon, :raza, :descripcion, :aleta)');
        $sql->bindValue(':idTiburon', $this->IdTiburon);
        $sql->bindValue(':raza', $this->Raza);
        $sql->bindValue(':descripcion', $this->Descripcion);
        $sql->bindValue(':aleta', $this->Aleta);
        return $sql->execute();
	}
	
	public static function delete($id)
	{ 
		$db = ConexionDB::getDBconnection();
        $sql = $db->prepare('DELETE FROM Tiburon WHERE IdTiburon = :id');
		$sql->bindValue(':id', $id);
        return $sql->execute();
	}

	public static function update($id, $raza, $descripcion, $aleta)
	{
		$db = ConexionDB::getDBconnection();
        $sql = $db->prepare('UPDATE Tiburon SET IdTiburon = :id, Raza = :raza, Descripcion = :descripcion, Aleta = :aleta WHERE IdTiburon = :id');
        $sql->bindValue(':id', $id);
        $sql->bindValue(':raza', $raza);
        $sql->bindValue(':descripcion', $descripcion);
		$sql->bindValue(':aleta', $aleta);
        return $sql->execute();
	}
}