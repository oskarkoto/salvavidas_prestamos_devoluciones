<!--Controlador para eliminar Prestamo de Equipo.-->
<?php
include "model/PrestamoEquipo.php";

$idPrestamoEquipo = $_GET['idPrestamoEquipo'];
$PrestamoEquipo = new PrestamoEquipo();    
    if ($PrestamoEquipo->eliminarPrestamoEquipo($idPrestamoEquipo)){
        $msg = "EXITO borrando el Prestamo de Equipo.";
        $allPrestamoEquipo = $PrestamoEquipo->seleccionarAllPrestamoEquipo();
        $EstadoDevolucion = new EstadoDevolucion();    
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
            $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
            include 'view/verAllPrestamoEquipo.php';
    } else {
        $msgError = "ERROR borrando el Prestamo.";
        $allPrestamoEquipo = $PrestamoEquipo->seleccionarAllPrestamoEquipo();
        $EstadoDevolucion = new EstadoDevolucion();    
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
            include 'view/verAllPrestamoEquipo.php';
    }    

