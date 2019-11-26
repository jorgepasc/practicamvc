<?php

require_once("../app/models/Tiburon.php");

class TiburonController
{
	public function __construct()
	{
		echo "en el TiburonController <br>";
	}

	public function index()
	{
		$tiburon = Tiburon::getTiburon();
		require("../app/views/tiburon/index.php");
	}

	public function show()
	{
		echo "en el TiburonController show <br>";
	}
}