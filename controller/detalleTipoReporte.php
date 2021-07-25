<!--Controlador para detallar un Tipo de Reporte.-->
<?php
include 'model/TipoReporte.php';

$tipoReporteId = $_POST['idTipoReporte'];
$sTipoReporte = new TipoReporte();
$selectTipoReporte = $sTipoReporte->seleccionarTipoReporte($tipoReporteId);
$sTipoReporte = $selectTipoReporte[0];

include 'view/verDetalleTipoReporte.php';