<!--Controlador para detallar un Estado de Devolucion.-->
<?php
include 'model/EstadoDevolucion.php';

$estadoDevolucionId = $_POST['idEstadoDevolucion'];
$sEstadoDevolucion = new EstadoDevolucion();
$selectEstadoDevolucion = $sEstadoDevoluciono->seleccionarEstadoDevolucion($estadoDevolucionId);
$sEstadoDevolucion = $selectEstadoDevolucion[0];

include 'view/verDetalleEstadoDevolucion.php';