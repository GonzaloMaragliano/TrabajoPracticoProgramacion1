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
                $credenciales['BD']);
            }
            catch(Exception $e){
                $e = 'Error de conexion: ' .self::$conexion->connect_error;
                self::$conexion = null;
                die($e);
            }
            self::$conexion->set_charset('utf8');
        }
    }

    public function login($nombre_usuario, $clave)
    {
        $q = "SELECT id, clave FROM usuarios WHERE usuario = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("s", $nombre_usuario);
        
        if ($query->execute()){
            $query->bind_result($id, $clave_encriptada);
            if($query->fetch()){
                if(password_verify($clave, $clave_encriptada)){
                    return new Usuario($nombre_usuario, $clave, $id);
                } 
            }
        }
        return false;
    }

    public function guardar(Usuario $usuario, $clave)
    {
        $q = "INSERT INTO usuarios (usuario, clave)";
        $q.= "VALUES(?,?)";
        $query = self::$conexion->prepare($q);
        $nombre_usuario = $usuario->getUsuario();
        $clave_encriptada = password_hash($clave, PASSWORD_BCRYPT);
        $query->bind_param("ss", $nombre_usuario, $clave_encriptada);
        if($query->execute()){
            return self::$conexion->insert_id;
        } else{
            return false;
        }
    }

    public function bajaUsuario($usuario)
    {
        $q = "DELETE FROM usuarios WHERE usuario = ?";
        $query = self::$conexion->prepare($q);
        $nombre_usuario = $usuario->getUsuario();
        $query->bind_param("s", $nombre_usuario);
        if($query->execute()){
            return true;
        } else{
            return false;
        }
    }
}
?>