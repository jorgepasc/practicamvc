<?php

class Perro
{
	protected $IdPerro; //Int
	protected $Raza; //String
	protected $Color; //String

	function __construct()
    {
       $this->IdPerro = 0;
       $this->Raza = "";
       $this->Color = "";       
    }

	public function getIdPerro()
	{
		return $this->IdPerro;
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
	public function setIdPerro($IdPerro)
	{
		$this->IdPerro = $IdPerro;
	}

	public function setRaza($Raza)
	{
		$this->Raza = $Raza;
	}

	public function setColor($Color)
	{
		$this->Color = $Color;
	}
}