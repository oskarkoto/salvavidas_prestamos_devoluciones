<!--Controlador para crear Estado de Devolucion.-->
<?php

include 'model/EstadoDevolucion.php';

if ($_POST) {
    $form = new EstadoDevolucion($_POST['idEstadoDevolucion'], $_POST['descripcionEstadoDevolucion']);
    if ($form->insertEstadoDevolucion()) {
        $selectEstadoDevolucion = $form->seleccionarEstadoDevolucion($form->idEstadoDevolucion);
        $form = $selectEstadoDevolucion[0];
        include "view/verDetalleEstadoDevolucion.php";
    } else {
        $msgError = "ERROR creando Estado de Devolución.";
        include "view/crearEstadoDevolucion.php";
    }
} else {
    include "view/crearEstadoDevolucion.php";
}