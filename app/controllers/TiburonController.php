<?php

require_once("../app/models/Tiburon.php");

class TiburonController
{
	public function __construct()
	{
	}

	public function index()
	{
		$tiburon = Tiburon::getTiburon();
		require("../app/views/tiburon/index.php");
	}

	public function create()
    {
        require '../app/views/tiburon/create.php';
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
		echo "en el TiburonController show <br>";
	}

	public function redirect($url)
	{
		if (!headers_sent())
		{    
			header('Location: '.$url);
			exit;
		}
		else
		{  
			echo '<script type="text/javascript">';
			echo 'window.location.href="'.$url.'";';
			echo '</script>';
			echo '<noscript>';
			echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
			echo '</noscript>'; exit;
		}
	}
}