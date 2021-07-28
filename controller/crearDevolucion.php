<!--Controlador para crear Devolucion.-->
<?php

include 'model/Devolucion.php';
include 'model/Prestamo.php';
include 'model/EstadoDevolucionGeneral.php';

if ($_POST) {
    $form = new Devolucion($_POST['idDevolucion'], $_POST['idPrestamo'], $_POST['fechaRealDevolucion'], $_POST['idEstadoDevolucionGeneral']);
    if ($form->insertDevolucion()) {
        $selectDevolucion = $form->seleccionarDevolucion($form->idDevolucion);
        $form = $selectDevolucion[0];
        include "view/verDetalleDevolucion.php";
    } else {
        $msgError = "ERROR creando Devolucion.";
        include "view/crearDevolucion.php";
    }
} else {
    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    $EstadoDevGnrl = new EstadoDevolucionGen();
    $allEstadoDevGnrl = $EstadoDevGnrl->seleccionarAllEstadoDevolucionGen();
    include "view/crearDevolucion.php";
}