<!--Controlador para crear Devolucion.-->
<?php

include 'model/Devolucion.php';

if ($_POST) {
    $form = new Devolucion($_POST['idDevolucion'], $_POST['idPrestamo'], $_POST['fechaRealDevolucion'], $_POST['idEstadoDevolucionGeneral']);
    if ($form->insertDevolucion()) {
        $sDevolucion = $newDevolucion->seleccionarDevolucion($newDevolucion->idDevolucion);
        $sDevolucion = $sDevolucion[0];
        include "view/verDetalleDevolucion.php";
    } else {
        $msgError = "ERROR creando Devolucion.";
        include "view/nuevaDevolucion.php";
    }
} else {
    include "view/nuevaDevolucion.php";
}