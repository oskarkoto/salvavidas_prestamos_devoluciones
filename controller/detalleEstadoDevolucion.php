<!--Controlador para detallar un Estado de Devolucion.-->
<?php
include 'model/EstadoDevolucion.php';

$estadoDevolucionId = $_GET['idEstadoDevolucion'];
$sEstadoDevolucion = new EstadoDevolucion();
$selectEstadoDevolucion = $sEstadoDevolucion->seleccionarEstadoDevolucion($estadoDevolucionId);
$sEstadoDevolucion = $selectEstadoDevolucion[0];
$msg = NULL;
include 'view/verDetalleEstadoDevolucion.php';