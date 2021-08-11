<!--Controlador para crear Devolucion.-->
<?php

include 'model/Devolucion.php';

if ($_POST) {
    $form = new Devolucion($_POST['idDevolucion'], $_POST['idPrestamo'], $_POST['fechaRealDevolucion'], $_POST['idEstadoDevolucionGeneral']);
    if ($form->insertDevolucion()) {
        $selectDevolucion = $form->seleccionarDevolucion($form->idDevolucion);
        $form = $selectDevolucion[0];
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        $EstadoDevGnrl = new EstadoDevolucionGen();
        $allEstadoDevGnrl = $EstadoDevGnrl->seleccionarAllEstadoDevolucionGen();
        $msg = "NUEVA Devolución creada.";
        include "view/verDetalleDevolucion.php";
    } else {
        $msg = "ERROR creando Devolucion.";
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        $EstadoDevGnrl = new EstadoDevolucionGen();
        $allEstadoDevGnrl = $EstadoDevGnrl->seleccionarAllEstadoDevolucionGen();
        include "view/crearDevolucion.php";
    }
} else {
    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    $EstadoDevGnrl = new EstadoDevolucionGen();
    $allEstadoDevGnrl = $EstadoDevGnrl->seleccionarAllEstadoDevolucionGen();
    include "view/crearDevolucion.php";
}