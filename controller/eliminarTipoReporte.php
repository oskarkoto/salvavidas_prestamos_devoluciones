<!--Controlador para eliminar Tipo de Reporte.-->
<?php
include "model/TipoReporte.php";

if (isset($_GET['idTipoReporte'])) {
    $viewTipoReporte = new TipoReporte();    
    if ($viewTipoReporte->eliminarTipoReporte($idTipoReporte)){
        $msg = "EXITO borrando el tipo de reporte.";
        include "view/VerAllTipoReporte.php";
    } else {
       $msgError = "ERROR borrando el tipo de reporte.";
       include "view/detalleTipoReporte.php"; 
    }    
} else {
    $idTipoReporte = $_GET['idTipoReporte'];
    $viewTipoReporte = new TipoReporte(); 
    $selectTipoReporte = $viewTipoReporte->seleccionarTipoReporte($idTipoReporte);
    $viewTipoReporte = $selectTipoReporte[0];
    $myTipoReporte = new TipoReporte($viewTipoReporte->idTipoReporte, $viewTipoReporte->nombreTipoReporte, 
        $viewTipoReporte->detalleTipoReporte, $viewTipoReporte->queryTipoReporte);
    include "view/detalleTipoReporte.php";
}