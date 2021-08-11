<!--Controlador para detallar todos los Estados de Devolucion.-->
<?php
include 'model/EstadoDevolucion.php';

$estadoDevolucion = new EstadoDevolucion();
$allEstadoDevolucion = $estadoDevolucion->seleccionarAllEstadoDevolucion();
$msg = NULL;
include 'view/verAllEstadoDevolucion.php';