<!--Controlador para crear Tipo de Reporte.-->
<?php

include 'model/TipoReporte.php';

if ($_POST) {
    $form = new TipoReporte($_POST['idTipoReporte'], $_POST['nombreTipoReporte'], $_POST['detalleTipoReporte'], $_POST['queryTipoReporte']);
    if ($form->insertTipoReporte()) {
        $sTipoReporte = $newReporte->seleccionarReporte();
        $sTipoReporte = $sTipoReporte[0];
        include "view/VerAllTipoReporte.php";
    } else {
        $msgError = "ERROR creando Reporte.";
        include "view/nuevoTipoReporte.php";
    }
} else {
    include "view/nuevoTipoReporte.php";
}