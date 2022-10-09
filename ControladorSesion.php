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

    public function crearUsuario($nombre_usuario, $clave)
    {
        $repoUsuario = new RepositorioUsuario();
        $usuario = new Usuario($nombre_usuario);
        $id = $repoUsuario->guardar($usuario, $clave);

        if($id === false) {
            return [false, "Error al crear el usuario"];
        } else {
            $usuario->setId($id);
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return[true, "Usuario creado correctamente"];
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

