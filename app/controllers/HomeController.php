<?php

require_once("../app/models/Home.php");

class HomeController
{
	public function __construct()
	{
		echo "<br>en el Home controller <br>";	
	}

	public function index()
	{
		echo "en el HomeController index <br>";
		//$animales = Home::getAllAnimals();
		require "../app/views/index.php";
	}

	public function show()
	{
		echo "en el HomeController show <br>";
	}
}