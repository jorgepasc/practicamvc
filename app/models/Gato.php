<?php

class Gato
{
	protected $IdGato;
	protected $Raza; //String
	protected $Color; //String

	function __construct()
    {
       $this->IdGato = 0;
       $this->Raza = "";
       $this->Color = "";       
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
}