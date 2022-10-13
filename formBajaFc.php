<?php
session_start();
require_once 'ControladorSesion.php';

$cs = new ControladorSesion();
$factura = $cs->verFactura($_POST['nroFca']);

$cs->bajaFactura($factura, $_SESSION['usuario']=unserialize($_SESSION['usuario']));