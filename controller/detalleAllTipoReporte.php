<!--Controlador para detallar todos los Tipos de Reporte.-->
<?php
include 'model/TipoReporte.php';

$tipoReporte = new TipoReporte();
$allTipoReporte = $tipoReporte->seleccionarAllTipoReporte();
include 'view/VerAllTipoReporte.php';