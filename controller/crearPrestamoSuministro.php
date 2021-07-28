<!--Controlador para crear Prestamo de Suministro.-->
<?php
include 'model/PrestamoSuministro.php';
include 'model/Prestamo.php';
include 'model/Suministro.php';
include 'model/EstadoDevolucion.php';

if ($_POST) {
    $form = new PrestamoSuministro($_POST['idSuministroEquipo'], $_POST['idSuministro'], $_POST['idSuministro'], $_POST['idEstadoDevolucion']);
    if ($form->insertPrestamoSuministro()) {
        $selectPrestamoSuministro = $form->seleccionarPrestamoSuministro($form->idPrestamoSuministro);
        $form = $selectPrestamoSuministro[0];
        include "view/verDetallePrestamoSuministro.php";
    } else {
        $msgError = "ERROR creando Prestamo de Suministro.";
        include "view/crearPrestamoSuministro.php";
    }
} else {
    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    $Suministro = new Suministro();
    $allSuministro = $Suministro->seleccionarAllSuministro();
    $EstadoDevolucion = new EstadoDevolucion();
    $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
    include "view/crearPrestamoSuministro.php";
}