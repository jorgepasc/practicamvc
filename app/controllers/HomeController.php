<?php

require_once("../app/models/Home.php");

class HomeController
{
	public function __construct()
	{
	}

	public function index()
	{
		require "../app/views/index.php";
	}

	public function show()
	{
		echo "en el HomeController show <br>";
	}
}