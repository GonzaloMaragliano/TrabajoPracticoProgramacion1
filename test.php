<?php
require_once 'RepositorioUsuario.php';
require_once 'Usuario.php';
require_once 'ControladorSesion.php';

$usuario = null;
$repo = new RepositorioUsuario();
$c = new ControladorSesion();

//c->login("Fran", "1234");
$usuario = $repo->login("Fran", "1234");

echo $usuario;