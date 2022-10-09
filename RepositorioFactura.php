<?php

    // Objetos requeridos para llamada al repositorio.

    require_once 'Factura.php';
    require_once 'Usuario.php';
    require_once '.env.php';

    class RepositorioFactura {
        
        private static $conexion = null;


        // Conexion al servidor

        public function __construct(){

            if(is_null(self::$conexion)){
                try{
                    $repo = new mysqli(credenciales(), credenciales(), credenciales(), credenciales());
                }catch(Exception $e){
                    echo $e;
                }  
            }

        }












        // LLamada a la base de datos para dar de alta una factura por un usuario.

        public function altaFactura($factura, $usuario){

            $q = "INSERTAR DATOS DE LA FACTURA A LA BASE DE DATOS";
            

            
            echo "Conexion exitosa";
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