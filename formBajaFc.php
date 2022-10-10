<?php
session_start();
require_once 'ControladorSesion.php';

$cs = new ControladorSesion();
 
$cs->bajaFactura($_POST['NombreCliente'], $_SESSION['usuario']=unserialize($_SESSION['usuario']));