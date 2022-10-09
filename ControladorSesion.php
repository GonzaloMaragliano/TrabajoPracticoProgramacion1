<?php
require_once 'RepositorioUsuario.php';
require_once 'Usuario.php';
require_once 'RepositorioFactura.php';

class ControladorSesion
{
    protected $usuario = null;
    
    public function login ($nombre_usuario, $clave)
    {
        $repo = new RepositorioUsuario();
        $usuario = $repo->login($nombre_usuario, $clave);

        if($usuario === false){
            return[ false, "Error de credenciales"];
        } else{
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return[true, "Usuario correctamente autenticado"];
        }
    }

    public function altaFactura($factura, $usuario){
        $repoFactura = new RepositorioFactura();
        $repoFactura.altaFactura($factura, $usuario);
    }
    public function bajaFactura($factura, $usuario){
        $repoFactura = new RepositorioFactura();
        $repoFactura.bajaFactura($factura, $usuario);
    }
    public function verFactura($_POST['NombreCliente']){
        $repoFactura = new RepositorioFactura();
        $repoFactura.verFacturas();
    }
    public function bajaUsuario($usuario){
        $repoUsuario = new RepositorioUsuario();
        $repoUsuario.bajaUsuario($usuario);
    }
}

