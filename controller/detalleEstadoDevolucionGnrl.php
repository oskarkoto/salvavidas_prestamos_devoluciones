<!--Controlador para detallar un Estado de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

$estadoDevolucionGeneralId = $_POST['idEstadoDevolucionGeneral'];
$sEstadoDevolucionGeneral = new Prestamo();
$selectEstadoDevolucionGeneral = $sEstadoDevolucionGeneral->seleccionarAllEstadoDevolucionGen($estadoDevolucionGeneralId);
$sEstadoDevolucionGeneral = $selectEstadoDevolucionGeneral[0];

include 'view/verDetalleEstadoDevolucionGnrl.php';