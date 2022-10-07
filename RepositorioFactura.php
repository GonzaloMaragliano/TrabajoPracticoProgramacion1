<?php

    // Objetos requeridos para llamada al repositorio.

    require_once 'Factura.php';
    require_once 'Usuario.php';

    class RepositorioFactura {
        
        // LLamada a la base de datos para dar de alta una factura por un usuario.
        
        public function altaFactura($factura, $usuario){

            $q = "INSERTAR DATOS DE LA FACTURA A LA BASE DE DATOS";
            
        }

        // LLamada a la base de datos para dar de baja una factura por un usuario.

        public function bajaFactura($factura, $usuario){

            $q = "ACTUALIZAR DATOS DE LA FACTURA A LA BASE DE DATOS";

        }

        // LLamada a la base de datos para ver las facturas.

        public function verFacturas(){

            $q = "SELECCIONAR TODAS LAS FACTURAS DE LA BASE DE DATOS";

        }



    }




?>