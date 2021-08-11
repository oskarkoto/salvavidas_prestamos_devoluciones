<!--Controlador para actualizar un Tipo de Reporte.-->
<?php
include "model/TipoReporte.php";

/** 
 * Actualiza la información o bien, muestra la vista para actualizar la información. 
**/

if ($_POST) {
    $sTipoReporte = new TipoReporte($_POST['idTipoReporte'],$_POST['nombreTipoReporte'], $_POST['detalleTipoReporte'], $_POST['queryTipoReporte']);
    if ($sTipoReporte->actualizarTipoReporte()){
        $selectTipoReporte = $sTipoReporte->seleccionarTipoReporte($_POST['idTipoReporte']);
        $sTipoReporte = $selectTipoReporte[0];
        $msg = "Se actualizó el Tipo de reporte.";
        include "view/verDetalleTipoReporte.php";
    }    
    
} else {
    $sTipoReporte = new TipoReporte();
    $selectTipoReporte = $sTipoReporte->seleccionarTipoReporte($_GET['idTipoReporte']);
    $sTipoReporte = $selectTipoReporte[0];
    include "view/actualizarTipoReporte.php";
}