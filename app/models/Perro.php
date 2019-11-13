<?php

class Perro
{
	protected $IdPerro;
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
}