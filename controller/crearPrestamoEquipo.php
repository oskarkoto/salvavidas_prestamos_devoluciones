<!--Controlador para crear Prestamo de Equipo.-->
<?php

include 'model/PrestamoEquipo.php';

if ($_POST) {
    $form = new PrestamoEquipo($_POST['idPrestamoEquipo'], $_POST['idPrestamo'], $_POST['idEquipo'], $_POST['idEstadoDevolucion']);
    if ($form->insertPrestamoEquipo()) {
        $sPrestamoEquipo = $newPrestamoEquipo->seleccionarPrestamoEquipo($newPrestamoEquipo->idPrestamoEquipo);
        $sPrestamoEquipo = $sPrestamoEquipo[0];
        include "view/verDetallePrestamoEquipo.php";
    } else {
        $msgError = "ERROR creando Prestamo de Equipo.";
        include "view/nuevoPrestamoEquipo.php";
    }
} else {
    include "view/nuevoPrestamoEquipo.php";
}