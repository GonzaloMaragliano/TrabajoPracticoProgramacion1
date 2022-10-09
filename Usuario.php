<?php
require_once 'RepositorioFactura.php';
require_once 'RepositorioUsuario.php';

    class Usuario 
    {
        private $usuario;
        private $clave;
        private $id;
        private $factura;
        private $controladorSesion;

        //Constructor clase Usuario

        public function __construct($usuario, $clave, $factura, $controladorSesion, $id){
            $this->usuario = $usuario;
            $this->clave = $clave;
            $this->factura = $factura;
            $this->controladorSesion = $controladorSesion;
            $this->id = $id;
        }

        //Metodos
        public function getId() {return $this->id;}
        public function getUsuario() {returno $this->usuario;}
        public function modificarClave($clave) {$this->clave = $clave;}
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

?>