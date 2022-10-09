<?php

    class Usuario 
    {
        private $nombre_usuario;
        private $clave;
        private $id;

        //Constructor clase Usuario

        public function __construct($nombre_usuario, $clave, $id = null){
            $this->nombre_usuario = $nombre_usuario;
            $this->clave = $clave;
            $this->id = $id;
        }

        //Metodos
        public function getId() {return $this->id;}
        public function getUsuario() {return $this->nombre_usuario;}
        public function setId($id) {$this->id = $id;}        
    }

?>