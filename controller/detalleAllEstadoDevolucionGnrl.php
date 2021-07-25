<!--Controlador para detallar todos los Estados de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

$EstadoDevolucionGnrl = new EstadoDevolucionGeneral();
$allEstadoDevolucionGnrl = $EstadoDevolucionGnrl->seleccionarEstadoDevolucionGen();
include 'view/VerAllEstadoDevolucionGnrl.php';