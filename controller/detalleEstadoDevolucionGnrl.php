<!--Controlador para detallar un Estado de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

$estadoDevolucionGeneralId = $_GET['idEstadoDevolucionGeneral'];
$sEstadoDevolucionGeneral = new EstadoDevolucionGen();
$selectEstadoDevolucionGeneral = $sEstadoDevolucionGeneral->seleccionarEstadoDevolucionGen($estadoDevolucionGeneralId);
$sEstadoDevolucionGeneral = $selectEstadoDevolucionGeneral[0];
$msg = NULL;

include 'view/verDetalleEstadoDevolucionGnrl.php';