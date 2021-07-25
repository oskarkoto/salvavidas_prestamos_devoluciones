<!--Controlador para crear Prestamo de Suministro.-->
<?php

include 'model/PrestamoSuministro.php';

if ($_POST) {
    $form = new PrestamoSuministro($_POST['idSuministroEquipo'], $_POST['idSuministro'], $_POST['idSuministro'], $_POST['idEstadoDevolucion']);
    if ($form->insertPrestamoSuministro()) {
        $sPrestamoSuministro = $newPrestamoSuministro->seleccionarPrestamoSuministro($newPrestamoSuministro->idPrestamoSuministro);
        $sPrestamoSuministro = $sPrestamoSuministro[0];
        include "view/verDetallePrestamoSuministro.php";
    } else {
        $msgError = "ERROR creando Prestamo de Suministro.";
        include "view/nuevoPrestamoSuministro.php";
    }
} else {
    include "view/nuevoPrestamoSuministro.php";
}