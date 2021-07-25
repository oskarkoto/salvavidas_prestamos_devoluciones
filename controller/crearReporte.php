<!--Controlador para crear Reporte.-->
<?php

include 'model/Reporte.php';

if ($_POST) {
    $form = new Reporte($_POST['idReporte'], $_POST['tituloReporte'], $_POST['tipoReporte'], $_POST['fechaReporte']);
    if ($form->insertReporte()) {
        $sReporte = $newReporte->seleccionarAllReporte();
        include "view/VerAllReporte.php";
    } else {
        $msgError = "ERROR creando Reporte.";
        include "view/nuevoReporte.php";
    }
} else {
    include "view/nuevoReporte.php";
}