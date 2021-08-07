<!--Controlador para crear Reporte.-->
<?php
include 'model/Reporte.php';

if ($_POST) {
    $form = new Reporte($_POST['tituloReporte'], $_POST['idTipoReporte'], $_POST['fechaReporte']);
    if ($form->insertReporte()) {
        $Reporte = new Reporte();
        $allReporte = $Reporte->seleccionarAllReporte();
        $TipoReporte = new TipoReporte();
        $allTipoReporte = $TipoReporte->seleccionarAllTipoReporte();
        include "view/verAllReporte.php";
    } else {
        $msgError = "ERROR creando Reporte.";
        include "view/crearReporte.php";
    }
} else {
    $TipoReporte = new TipoReporte();
    $allTipoReporte = $TipoReporte->seleccionarAllTipoReporte();
    include "view/crearReporte.php";
}