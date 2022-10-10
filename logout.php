<?php
    session_start();
    session_destroy();
    header('Location:Inicio.php?mensaje=Sesión cerrada con exito');
?>