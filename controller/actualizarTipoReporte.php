<!--Controlador para actualizar un Tipo de Reporte.-->
<?php
include "model/TipoReporte.php";

/** 
 * Actualiza la información o bien, muestra la vista para actualizar la información. 
**/

if ($_POST) {
    $myTipoReporte = new TipoReporte($_POST['idTipoReporte'], $_POST['nombreTipoReporte'], $_POST['detalleTipoReporte'], $_POST['queryTipoReporte']);
    if ($myTipoReporte->actualizarTipoReporte()){
        $msg = "EXITO. Se editó el tipo de reporte.";
        include "view/VerAllTipoReporte.php";
    } else {
       $msgError = "ERROR editando el tipo de Reporte.";
       include "view/actualizarTipoReporte.php"; 
    }    
} else {
    $myTipoReporteId = $_GET['idTipoReporte'];
    $viewTipoReporte = new TipoReporte();
    $selectTipoReporte = $viewTipoReporte->seleccionarTipoReporte($myTipoReporteId);
    $viewTipoReporte = $selectTipoReporte[0];
    $myTipoReporte = new TipoReporte($myTipoReporte->idTipoReporte, 
        $viewTipoReporte->nombreTipoReporte,
        $viewTipoReporte->detalleTipoReporte,
        $viewTipoReporte->queryTipoReporte);
    include "view/actualizarTipoReporte.php";
}