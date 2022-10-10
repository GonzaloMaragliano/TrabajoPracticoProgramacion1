<?php
session_start();
require_once 'ControladorSesion.php';

$cs = new ControladorSesion();

$cs->verFactura($_POST['NombreCliente']);
