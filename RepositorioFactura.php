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

            if(!$sentencia->bind_param("ssssisi", $nro_factura, $cliente, $f_alta, $f_facturacion, $bultos, $obs, $usuario_id)){
                echo "Fallo la vinculacion de parametros de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }
            
            if(!$sentencia->execute()){
                echo "Fallo la ejecucion de la consulta:  ".self::$conexion->errno."  ERROR: ".self::$conexion->error;
            }
            

            $sentencia->close();
        }




















        // LLamada a la base de datos para dar de baja una factura por un usuario.

        public function bajaFactura($factura, $usuario){

            $nro_factura = $factura->getNroFactura();

            $q = "UPDATE facturas SET usuario_baja = ? WHERE nro_factura = ".$nro_factura.""; 

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
 














        // LLamada a la base de datos para ver las facturas pasando un nombre de cliente como param.

        public function verFacturas($nombre_cliente){
            $listado_facturas = [];
            $q = "SELECT * FROM facturas WHERE cliente LIKE '%".$nombre_cliente."%'";


            // Obtengo resultado de la consulta
            $resultado = self::$conexion->query($q);
            
            while($fila = $resultado->fetch_assoc()){
                $fc = new Factura($fila['nro_factura'], $fila['cliente'], $fila['fecha_carga'], $fila['fecha_facturacion'], $fila['bultos'], $fila['observacion']);
                
               // echo $$fila['nro_factura']."<br>".$fila['cliente']."<br>".$fila['fecha_carga']."<br>".$fila['fecha_facturacion']."<br>".$fila['bultos']."<br>".$fila['observacion'];
                
                array_unshift($listado_facturas, $fc);

            }

            
            return $listado_facturas;
        }













        
        // LLamada a la base de datos para ver una factura.

        public function verFactura($nro_factura){

            $q = "SELECT * FROM facturas WHERE nro_factura LIKE '".$nro_factura."'";
        
            // Obtengo resultado de la consulta
            $resultado = self::$conexion->query($q);
            
            $fc = null;

            if($fila = $resultado->fetch_assoc()){
                $fc = new Factura($fila['nro_factura'], $fila['cliente'], $fila['fecha_carga'], $fila['fecha_facturacion'], $fila['bultos'], $fila['observacion']);

               // echo $$fila['nro_factura']."<br>".$fila['cliente']."<br>".$fila['fecha_carga']."<br>".$fila['fecha_facturacion']."<br>".$fila['bultos']."<br>".$fila['observacion'];
               return $fc;   
            }
            
            return null;
        }





















        // LLamada a la base de datos para ver todas las facturas asociadas a sus movimientos.

        public function verFacturasAllUs(){

            $listado_usuario_factura = [null, null];
            $listado_final = [];

            $q = "SELECT * FROM usuarios us RIGHT JOIN facturas fc ON us.id = fc.usuario_alta WHERE fc.nro_factura IS NOT NULL";


            // Obtengo resultado de la consulta
            $resultado = self::$conexion->query($q);
            
            /*while($fila = $resultado->fetch_assoc()){
                echo "<pre>";
                print_r($fila);
                echo "</pre>";
            }*/

            while($fila = $resultado->fetch_assoc()){
                $fc = new Factura($fila['nro_factura'], $fila['cliente'], $fila['fecha_carga'], $fila['fecha_facturacion'], $fila['bultos'], $fila['observacion']);
                $usuario = new Usuario($fila['usuario'], $fila['clave'], $fila['id']);


                $listado_usuario_factura[0] = $usuario;
                $listado_usuario_factura[1] = $fc;
                array_unshift($listado_final, $listado_usuario_factura);
            }

            
            return $listado_final;
        }
}


?>