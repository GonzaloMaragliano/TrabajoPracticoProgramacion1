<?php
session_start();
require_once 'ControladorSesion.php';
require_once 'Usuario.php';

$cs = new ControladorSesion();

$cs->bajaUsuario($_SESSION['usuario']=unserialize($_SESSION['usuario']));