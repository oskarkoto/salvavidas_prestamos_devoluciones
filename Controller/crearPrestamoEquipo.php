<!--Controlador para crear Prestamo de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';

if ($_POST) {
    $form = new PrestamoEquipo($_POST['idPrestamoEquipo'], $_POST['idPrestamo'], $_POST['idEquipo'], $_POST['idEstadoDevolucion']);
    if ($form->insertPrestamoEquipo()) {
        $selectPrestamoEquipo = $form->seleccionarPrestamoEquipo($form->idPrestamoEquipo);
        $form = $selectPrestamoEquipo[0];
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
        $msg = "NUEVO Préstamo de Equipo creado.";
        include "view/verDetallePrestamoEquipo.php";
    } else {
        $msg = "ERROR creando Prestamo de Equipo.";
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
        $prestamoe = new PrestamoEquipo();
        $last =$prestamoe->selectLast();
            include "view/crearPrestamoEquipo.php";
    }
} else {
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();

        $prestamoe = new PrestamoEquipo();
        $last =$prestamoe->selectLast();
            include "view/crearPrestamoEquipo.php";
}