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

	public function create()
    {
        require '../app/views/loro/create.php';
	}
	
	public function store()
    {
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();
        header('Location:/user');
    }

	public function show()
	{
		echo "en el LoroController show <br>";
	}
}