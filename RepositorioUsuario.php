<?php
require_once '.env.php';
require_once 'Usuario.php';

class RepositorioUsuario 
{
    private static $conexion = null;

    public function __construct()
    {   
        if(is_null(self::$conexion)){
            try{
                $credenciales = credenciales();
                self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos']);
            }
            catch(Exception $e){
                $e = 'Error de conexion: ' .self::$conexion->connect_error;
                self::$conexion = null;
                die($e);
            }
        }
    }
}
?>