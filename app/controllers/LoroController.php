<?php

require_once("../app/models/Loro.php");

class LoroController
{
	public function __construct()
	{

	}

	public function index()
	{
		$loros = Loro::getAll();
		require("../app/views/loro/index.php");
	}

	public function create()
    {
        require '../app/views/loro/create.php';
    }

	public function store()
    {
		$loro = new Loro();
		$loro->setIdLoro($_REQUEST['idLoro']);
		$loro->setRaza($_REQUEST['raza']);
		$loro->setDescripcion($_REQUEST['descripcion']);
		$loro->setPluma($_REQUEST['pluma']);
		$loro->insert();
		$this->redirect('/loro');
	}
	
	public function delete($arguments)
    {
        $id = (int) $arguments[0];
        Loro::delete($id);
        $this->redirect('/loro');
	}

	public function edit($arguments)
    {
        $id = (int) $arguments[0];
		$loro = Loro::getById($id);
        require '../app/views/loro/edit.php';
    }
    
    public function update()
    {        
		Loro::update($_REQUEST['id'], $_REQUEST['raza'], $_REQUEST['descripcion'], $_REQUEST['pluma']);		
        $this->redirect('/loro');
    }
	
	public function show()
	{
		echo "en el LoroController show <br>";
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