<!--Controlador para detallar un Estado de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

$estadoDevolucionGeneralId = $_GET['idEstadoDevolucionGeneral'];
$sEstadoDevolucionGeneral = new EstadoDevolucionGen();
$selectEstadoDevolucionGeneral = $sEstadoDevolucionGeneral->seleccionarAllEstadoDevolucionGen($estadoDevolucionGeneralId);
$sEstadoDevolucionGeneral = $selectEstadoDevolucionGeneral[0];

include 'view/verDetalleEstadoDevolucionGnrl.php';