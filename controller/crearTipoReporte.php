<!--Controlador para crear Tipo de Reporte.-->
<?php
include 'model/TipoReporte.php';

if ($_POST) {
    $form = new TipoReporte($_POST['idTipoReporte'], $_POST['nombreTipoReporte'], $_POST['detalleTipoReporte'], $_POST['queryTipoReporte']);
    if ($form->insertTipoReporte()) {
        $selectTipoReporte = $form->seleccionarTipoReporte($form->idTipoReporte);
        $form = $selectTipoReporte[0];
        include "view/verDetalleTipoReporte.php";
    } else {
        $msgError = "ERROR creando Reporte.";
        include "view/crearTipoReporte.php";
    }
} else {
    include "view/crearTipoReporte.php";
}