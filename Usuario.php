<?php
    class Usuario 
    {
        private $usuario;
        private $clave;
        private $id;
        private $factura;
        private $controladorSesion;

        //Constructor clase Usuario

        public function __construct($usuario, $clave, $factura, $controladorSesion, $id){
            $this-> $usuario = $usuario;
            $this-> $clave = $clave;
            $this-> $factura = $factura;
            $this-> $controladorSesion = $controladorSesion;
            $this-> $id = $id;
        }

        //Metodos
    }

?>