<?php

require_once("../app/models/Gato.php");

class GatoController
{
	public function __construct()
	{
		echo "en el Gato controller <br>";
	}

	public function index()
	{
		$gato = Gato::getGato();
		require("../app/views/gato/index.php");
		echo "en el GatoController index <br>";
	}

	public function show()
	{
		echo "en el GatoController show <br>";
	}
}