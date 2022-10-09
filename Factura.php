<?php

    class Factura {

        private $nro_factura;
        private $cliente;
        private $fecha_alta;
        private $fecha_facturacion;
        private $fecha_baja;
        private $bultos;
        private $observacion;
        private $usuario_alta;
        private $usuario_baja;

        // Constructor de la clase Factura.

        public function __construct($nro_factura, $cliente, $fecha_alta, $fecha_facturacion, $bultos, $observacion=null){
            $this->nro_factura = $nro_factura;
            $this->cliente = $cliente;
            $this->fecha_alta = $fecha_alta;
            $this->fecha_facturacion = $fecha_facturacion;
            $this->bultos = $bultos;
            $this->observacion = $observacion;
        }

        // Metodos 'get' de la clase.

        public function getNroFactura(){
            return $this->nro_factura;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function getFecha_Alta(){
            return $this->fecha_alta;
        }

        public function getFechaFacturacion(){
            return $this->fecha_facturacion;
        }

        public function getFechaBaja(){
            return $this->fecha_baja;
        }

        public function getBultos(){
            return $this->bultos;
        }

        public function getObservacion(){
            return $this->observacion;
        }

        public function getUsuarioAlta(){
            return $this->usuario_alta;
        }

        public function getUsuarioBaja(){
            return $this->usuario_baja;
        }
    }


?>