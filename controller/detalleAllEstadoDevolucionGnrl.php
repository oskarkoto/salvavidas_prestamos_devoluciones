<!--Controlador para detallar todos los Estados de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

$EstadoDevolucionGnrl = new EstadoDevolucionGen();
$allEstadoDevolucionGnrl = $EstadoDevolucionGnrl->seleccionarEstadoDevolucionGen();
$msg = NULL;
include 'view/verAllEstadoDevolucionGnrl.php';