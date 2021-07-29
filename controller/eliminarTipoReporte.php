<!--Controlador para eliminar Tipo de Reporte.-->
<?php
include "model/TipoReporte.php";
    $idTipoReporte = $_GET['idTipoReporte'];
    $TipoReporte = new TipoReporte();
    $TipoReporte->eliminarTipoReporte($idTipoReporte);
    $allTipoReporte = $TipoReporte->seleccionarAllTipoReporte();
    include 'view/verAllTipoReporte.php';
