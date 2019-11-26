<?php

require_once("../app/models/Loro.php");

class LoroController
{
	public function __construct()
	{
		echo "en el LoroController <br>";
	}

	public function index()
	{
		$loro = Loro::getLoro();
		require("../app/views/loro/index.php");
	}

	public function show()
	{
		echo "en el LoroController show <br>";
	}
}