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
                $credenciales = credenciales();

                try{
                    self::$conexion = new mysqli($credenciales['servidor'], $credenciales['usuario'], $credenciales['clave'], $credenciales['BD']);

                }catch(Exception $e){
                    echo $e;
                    die(self::$conexion);
                }  
            }

        }











        // LLamada a la base de datos para dar de alta una factura por un usuario.

        public function altaFactura($factura, $usuario){

            $nro_factura = $factura->getNroFactura();
            $cliente = $factura->getCliente();
            $f_alta = $factura->getFecha_Alta();
            $f_facturacion = $factura->getFechaFacturacion();
            $bultos = $factura->getBultos();
            $obs = $factura->getObservacion();
            $usuario_id = $usuario->getId();

            $q = "INSERT INTO facturas (nro_factura, cliente, fecha_facturacion, fecha_carga, bultos, observacion, usuario_alta) VALUES(?, ?, ?, ?, ?, ?, ?)";
            
            if(!($setencia = self::$conexion->prepare($q))){
                echo "Fallo la preparacion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            if(!$sentencia->bind_param("sssssii", $nro_factura, $cliente, $f_alta, $f_facturacion, $bultos, $obs, $usuario_id)){
                echo "Fallo la vinculacion de parametros de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }
            
            if(!$sentencia->execute()){
                echo "Fallo la ejecucion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }
            

            $sentencia->close();
        }





































        // LLamada a la base de datos para dar de baja una factura por un usuario.

        public function bajaFactura($factura, $usuario){

            $q = "UPDATE facturas SET usuario_alta = ?";

            if(!($sentencia = self::$conexion->prepare($q))){
                echo "Fallo la preparacion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }


            if(!$sentencia->bind_param("i", $usuario->getId())){
                echo "Fallo la vinculacion de parametros de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            if(!$sentencia->execute()){
                echo "Fallo la ejecucion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            $sentencia->close()
        }
















        // LLamada a la base de datos para ver las facturas.

        public function verFacturas(){

            $q = "SELECCIONAR TODAS LAS FACTURAS DE LA BASE DE DATOS";

        }



    }


?>