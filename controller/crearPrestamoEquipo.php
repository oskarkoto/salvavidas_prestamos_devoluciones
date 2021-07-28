<!--Controlador para crear Prestamo de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';
include 'model/Prestamo.php';
include 'model/Equipo.php';
include 'model/EstadoDevolucion.php';

if ($_POST) {
    $form = new PrestamoEquipo($_POST['idPrestamoEquipo'], $_POST['idPrestamo'], $_POST['idEquipo'], $_POST['idEstadoDevolucion']);
    if ($form->insertPrestamoEquipo()) {
        $selectPrestamoEquipo = $form->seleccionarPrestamoEquipo($form->idPrestamoEquipo);
        $form = $selectPrestamoEquipo[0];
        include "view/verDetallePrestamoEquipo.php";
    } else {
        $msgError = "ERROR creando Prestamo de Equipo.";
        include "view/crearPrestamoEquipo.php";
    }
} else {
    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    $Equipo = new Equipo();
    $allEquipo = $Equipo->seleccionarAllEquipo();
    $EstadoDevolucion = new EstadoDevolucion();
    $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
    include "view/crearPrestamoEquipo.php";
}