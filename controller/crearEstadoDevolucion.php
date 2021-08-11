<!--Controlador para crear Estado de Devolucion.-->
<?php

include 'model/EstadoDevolucion.php';

if ($_POST) {
    $form = new EstadoDevolucion($_POST['idEstadoDevolucion'], $_POST['descripcionEstadoDevolucion']);
    if ($form->insertEstadoDevolucion()) {
        $selectEstadoDevolucion = $form->seleccionarEstadoDevolucion($form->idEstadoDevolucion);
        $form = $selectEstadoDevolucion[0];
        $msg = "NUEVO Estado de Devolución creado.";
        include "view/verDetalleEstadoDevolucion.php";
    } else {
        $msg = "ERROR creando Estado de Devolución.";
        include "view/crearEstadoDevolucion.php";
    }
} else {
    include "view/crearEstadoDevolucion.php";
}