<!--Controlador para eliminar Prestamo de Suministro.-->
<?php
include "model/PrestamoSuministro.php";

$idPrestamoSuministro = $_GET['idPrestamoSuministro'];
$PrestamoSuministro = new PrestamoSuministro();    
    if ($PrestamoSuministro->eliminarPrestamoSuministro($idPrestamoSuministro)){
        $msg = "EXITO al borrar el Préstamo de Suministro.";
        $allPrestamoSuministro = $PrestamoSuministro->seleccionarAllPrestamoSuministro();
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    
        $Suministro = new Suministro();
        $allSuministro = $Suministro->selectAllSuministro();
    
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
    
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
            include 'view/verAllPrestamoSuministro.php';
    } else {
        $msg = "ERROR al borrar el Préstamo de Suministro.";
        $allPrestamoSuministro = $PrestamoSuministro->seleccionarAllPrestamoSuministro();
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    
        $Suministro = new Suministro();
        $allSuministro = $Suministro->selectAllSuministro();
    
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
    
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
            include 'view/verAllPrestamoSuministro.php';
    }    

