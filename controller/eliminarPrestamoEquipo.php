<!--Controlador para eliminar Prestamo de Equipo.-->
<?php
include "model/PrestamoEquipo.php";

$idPrestamoEquipo = $_GET['idPrestamoEquipo'];
$PrestamoEquipo = new PrestamoEquipo();    
    if ($PrestamoEquipo->eliminarPrestamoEquipo($idPrestamoEquipo)){
        $msg = "EXITO al borrar el Préstamo de Equipo.";
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        $allPrestamoEquipo = $PrestamoEquipo->seleccionarAllPrestamoEquipo();
        $EstadoDevolucion = new EstadoDevolucion();    
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
        include 'view/verAllPrestamoEquipo.php';
    } else {
        $msg = "ERROR al borrar el Préstamo de Equipo.";
        $allPrestamoEquipo = $PrestamoEquipo->seleccionarAllPrestamoEquipo();
        $EstadoDevolucion = new EstadoDevolucion();    
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
            include 'view/verAllPrestamoEquipo.php';
    }    

