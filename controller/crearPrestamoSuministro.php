<!--Controlador para crear Prestamo de Suministro.-->
<?php
include 'model/PrestamoSuministro.php';


if ($_POST) {
    $form = new PrestamoSuministro($_POST['idPrestamoSuministro'], $_POST['idPrestamo'], $_POST['idSuministro'], $_POST['idEstadoDevolucion']);
    if ($form->insertPrestamoSuministro()) {
        $selectPrestamoSuministro = $form->seleccionarPrestamoSuministro($form->idPrestamoSuministro);
        $form = $selectPrestamoSuministro[0];

        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        
        $Suministro = new Suministro();
        $allSuministro = $Suministro->selectAllSuministro();
        
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
    
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
        $msg = "NUEVO Préstamo de Suministro creado.";
        include "view/verDetallePrestamoSuministro.php";
    } else {
        $msg = "ERROR creando Préstamo de Suministro.";
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        
        $Suministro = new Suministro();
        $allSuministro = $Suministro->selectAllSuministro();
        
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
    
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();       
        include "view/crearPrestamoSuministro.php";
    }
} else {
    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    
    $Suministro = new Suministro();
    $allSuministro = $Suministro->selectAllSuministro();
    
    $EstadoDevolucion = new EstadoDevolucion();
    $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();

    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    include "view/crearPrestamoSuministro.php";
}