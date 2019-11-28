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
		$gatos = Gato::getAll();
		require("../app/views/gato/index.php");
		echo "en el GatoController index <br>";
	}

	public function create()
    {
        require '../app/views/gato/create.php';
    }

	public function store()
    {
		$gato = new Gato();
		$gato->setIdGato($_REQUEST['idGato']);
		$gato->setRaza($_REQUEST['raza']);
		$gato->setDescripcion($_REQUEST['descripcion']);
		$gato->setPelaje($_REQUEST['pelaje']);
		$gato->insert();
		$this->redirect('/gato');
	}
	
	public function delete($arguments)
    {
        $id = (int) $arguments[0];
        //$gato = Gato::getById($id);
        Gato::delete($id);
        $this->redirect('/gato');
	}

	public function edit($arguments)
    {
        $id = (int) $arguments[0];
		$gato = Gato::getById($id);
		//var_dump($gato);
        require '../app/views/gato/edit.php';
    }
    
    public function update()
    {        
		Gato::update($_REQUEST['id'], $_REQUEST['raza'], $_REQUEST['descripcion'], $_REQUEST['pelaje']);		
        $this->redirect('/gato');
    }
	
	public function show()
	{
		echo "en el GatoController show <br>";
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