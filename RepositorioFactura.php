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

            $sentencia = self::$conexion->prepare($q);
            if(!$sentencia){
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

            $q = "UPDATE facturas SET usuario_baja = ?";

            if(!($sentencia = self::$conexion->prepare($q))){
                echo "Fallo la preparacion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            $id = $usuario->getId();
            if(!$sentencia->bind_param("i", $id)){
                echo "Fallo la vinculacion de parametros de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            if(!$sentencia->execute()){
                echo "Fallo la ejecucion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            $sentencia->close();
        }















        // LLamada a la base de datos para ver las facturas.

        public function verFacturas($nombre_cliente){

            $q = "SELECT * FROM facturas WHERE cliente = ?";

            $consulta = self::$conexion->prepare($q);
            if(!$consulta){
                echo "Fallo la preparacion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            //$nombre_cliente = "%".$nombre_cliente."%";
            if(!$consulta->bind_param("s", $nombre_cliente)){
                echo "Fallo la vinculacion de parametros de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            if(!$consulta->execute()){
                echo "Fallo la ejecucion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }

            // Obtengo resultado de la consulta
            $resultado = $consulta->query($q);

            print_r($resultado);

            $consulta->close();
        }



}


?>