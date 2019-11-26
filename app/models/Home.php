<?php 

class Home
{
    function getAllAnimals()
    {
        $connection = ConexionBD::getDBConnection();
        $sql = "SELECT * FROM Animal";
		$animales = $connection->query($sql)->fetch(PDO::FETCH_ASSOC);
		return $animales;
    }    
}

?>