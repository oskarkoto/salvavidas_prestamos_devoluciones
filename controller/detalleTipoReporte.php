<!--Controlador para detallar un Tipo de Reporte.-->
<?php
include 'model/TipoReporte.php';

$tipoReporteId = $_GET['idTipoReporte'];
$sTipoReporte = new TipoReporte();
$selectTipoReporte = $sTipoReporte->seleccionarTipoReporte($tipoReporteId);
$sTipoReporte = $selectTipoReporte[0];
$msg = NULL;

include 'view/verDetalleTipoReporte.php';