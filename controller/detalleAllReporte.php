<!--Controlador para detallar todos los Reportes.-->
<?php
include 'model/Reporte.php';

$Reporte = new Reporte();
$allReporte = $Reporte->seleccionarAllReporte();
include 'view/VerAllReporte.php';