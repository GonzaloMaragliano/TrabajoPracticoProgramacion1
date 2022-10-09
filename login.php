<?php
require_once 'ControladorSesion.php';

if(! isset($_POST['usuario']) || ! isset($_POST['clave'])) {
    $redirigir = 'index.html?mensaje=Error: Falta un campo obligatorio';
}
else{
    $cs = new ControladorSesion();
    $login = $cs->login($_POST['usuario'], $_POST['clave']);
    if ($login[0] === true) {
        $redirigir = 'Main.html';
    } else{
        $redirigir = 'index.html?mensaje= ' . $login[1];
    }
}
header('Location: '.$redirigir);
