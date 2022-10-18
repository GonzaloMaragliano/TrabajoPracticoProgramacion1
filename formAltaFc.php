<?php
session_start();
require_once 'ControladorSesion.php';
require_once 'Factura.php';

$cs = new ControladorSesion();
 
$fc = new Factura($_POST['nroFactura'],$_POST['NombreCliente'],$_POST['date'],$_POST['date-1'],$_POST['bultos'],$_POST['comentario']);

$cs->altaFactura($fc, unserialize($_SESSION['usuario']));

$redirigir = 'altaFca.php?mensaje= Factura dada de alta con éxito' ;
header('Location: '.$redirigir);
?>

