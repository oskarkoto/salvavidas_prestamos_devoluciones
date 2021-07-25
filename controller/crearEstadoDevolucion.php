<!--Controlador para crear Estado de Devolucion.-->
<?php

include 'model/EstadoDevolucion.php';

if ($_POST) {
    $form = new EstadoDevolucion($_POST['idEstadoDevolucion'], $_POST['descripcionEstadoDevolucion']);
    if ($form->insertEstadoDevolucion()) {
        $sEstadoDevolucion = $newEstadoDevolucion->seleccionarEstadoDevolucion($newEstadoDevolucion->idEstadoDevolucion);
        $sEstadoDevolucion = $sEstadoDevolucion[0];
        include "view/verDetalleEstadoDevolucion.php";
    } else {
        $msgError = "ERROR creando Estado de Devolución.";
        include "view/nuevoEstadoDevolucion.php";
    }
} else {
    include "view/nuevoEstadoDevolucion.php";
}