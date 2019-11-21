<?php

class ConexionDB
{
    protected $conexion;
    const host = "db";
    const databaseName = "animales";
    const user = "root";
    const pass = "password";

    /**
     * Devuelve el objeto de la conexion a la base de datos
     */
    public static function getDBConnection()
    {
        $objetoPDO = null;
        try
        {
            $objetoPDO = new PDO('mysql:host=db;dbname=animales','root','password');
            $objetoPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex)
        {
            echo "Error al conectarse a la base de datos: " .databaseName. " " .$ex->getMessage();
        }
        return $objetoPDO;
    }
}

?>