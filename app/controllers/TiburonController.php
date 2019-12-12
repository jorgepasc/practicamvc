<?php

require_once("../app/models/Tiburon.php");

class TiburonController
{
	public function __construct()
	{

	}

	public function index()
	{
		$tiburones = Tiburon::getAll();
		require("../app/views/tiburon/index.php");
	}

	public function create()
    {
        require '../app/views/tiburon/create.php';
    }

	public function store()
    {
		$tiburon = new Tiburon();
		$tiburon->setIdTiburon($_REQUEST['idTiburon']);
		//echo $_REQUEST['raza'];
		$tiburon->setRaza($_REQUEST['raza']);
		$tiburon->setDescripcion($_REQUEST['descripcion']);
		$tiburon->setAleta($_REQUEST['aleta']);
		$tiburon->insert();
		$this->redirect('/tiburon');
	}
	
	public function delete($arguments)
    {
        $id = (int) $arguments[0];
        Tiburon::delete($id);
        $this->redirect('/tiburon');
	}

	public function edit($arguments)
    {
        $id = (int) $arguments[0];
		$tiburon = Tiburon::getById($id);
        require '../app/views/tiburon/edit.php';
    }
    
    public function update()
    {        
		Tiburon::update($_REQUEST['id'], $_REQUEST['raza'], $_REQUEST['descripcion'], $_REQUEST['aleta']);		
        $this->redirect('/tiburon');
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