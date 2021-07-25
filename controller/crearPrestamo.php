<!--Controlador para crear Prestamo.-->
<?php

include 'model/Prestamo.php';

if ($_POST) {
    $form = new Prestamo($_POST['idPrestamo'], $_POST['idTecnico'], $_POST['fechaPrestamo'], $_POST['fechaEsperadaDevolucion']);
    if ($form->insertPrestamo()) {
        $sPrestamo = $newPrestamo->seleccionarPrestamo($newPrestamo->idPrestamo);
        $sPrestamo = $sPrestamo[0];
        include "view/verDetallePrestamo.php";
    } else {
        $msgError = "ERROR creando Prestamo.";
        include "view/nuevoPrestamo.php";
    }
} else {
    include "view/nuevoPrestamo.php";
}