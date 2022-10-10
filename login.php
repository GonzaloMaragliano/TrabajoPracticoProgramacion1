<?php
require_once 'ControladorSesion.php';

if(! isset($_POST['usuario']) || ! isset($_POST['clave'])) {
    $redirigir = 'inicio.php?mensaje=Error: Falta un campo obligatorio';
}
else{
    $cs = new ControladorSesion();
    $login = $cs->login($_POST['usuario'], $_POST['clave']);
    if ($login[0] === true) {
        $redirigir = 'Main.php?mensaje= ' . $login[1];
    } else{
        $redirigir = 'inicio.php?mensaje= ' . $login[1];
    }
}
header('Location: '.$redirigir);
