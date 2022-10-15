<?php
session_start();
require_once 'RepositorioFactura.php';
require_once 'Factura.php';

$repoFc = new RepositorioFactura();

$listado_facturas = [];
$listado_facturas = $repoFc->verFacturas($_POST['NombreCliente']);

for($i = 0; $i <=$listado_facturas; $i++)
{
    $nroFactura = $listado_facturas[0]->getNroFactura();
    $cliente =$listado_facturas[1]->getCliente();
    $fechaAlta = $listado_facturas[2]->getFecha_Alta();
    $fechaFacturacion = $listado_facturas[3]->getFechaFacturacion();
    $fechaBaja = $listado_facturas[4]->getFechaBaja();
    $bultos = $listado_facturas[5]->getBultos();
    $observacion = $listado_facturas[6]->getObservacion();
    $usuarioAlta = $listado_facturas[7]->getUsuarioAlta();
    $usuarioBaja = $listado_facturas[8]->getUsuarioBaja();
};

$redirigir = 'buscarFca.php?mensaje= ' . $nroFactura;
header('Location: '.$redirigir);
