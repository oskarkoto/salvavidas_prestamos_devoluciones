<!--Controlador para detallar una Devolucion.-->
<?php
include 'model/Devolucion.php';

$devolucionId = $_POST['idDevolucion'];
$sDevolucion = new Devolucion();
$selectDevolucion = $sDevolucion->seleccionarDevolucion($devolucionId);
$sDevolucion = $selectDevolucion[0];

include 'view/verDetalleDevolucion.php';