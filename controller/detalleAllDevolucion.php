<!--Controlador para detallar todas las Devoluciones.-->
<?php
include 'model/Devolucion.php';

$Devolucion = new Devolucion();
$allDevolucion = $Devolucion->seleccionarAllDevolucion();
include 'view/VerAllDevolucion.php';