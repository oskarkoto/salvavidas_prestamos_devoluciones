<!--Controlador para crear Prestamo.-->
<?php
include 'model/Prestamo.php';
include 'model/Tecnicos.php';

if ($_POST) {
    $form = new Prestamo($_POST['idPrestamo'], $_POST['idTecnico'], $_POST['fechaPrestamo'], $_POST['fechaEsperadaDevolucion']);
    if ($form->insertPrestamo()) {
        $selectPrestamo = $form->seleccionarPrestamo($form->idPrestamo);
        $form = $selectPrestamo[0];
        include "view/verDetallePrestamo.php";
    } else {
        $msgError = "ERROR creando Prestamo.";
        include "view/crearPrestamo.php";
    }
} else {
    $Tecnico = new Tecnico();
    $allTecnico = $Tecnico->seleccionarAllTecnico();
    include "view/crearPrestamo.php";
}