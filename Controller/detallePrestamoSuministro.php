<!--Controlador para detallar un Prestamo de Suministro.-->
<?php
include 'model/PrestamoSuministro.php';

$prestamoSuministroId = $_GET['idPrestamoSuministro'];
$sPrestamoSuministro = new PrestamoSuministro();

    $selectPrestamoSuministro = $sPrestamoSuministro->seleccionarPrestamoSuministro($prestamoSuministroId);
    $sPrestamoSuministro = $selectPrestamoSuministro[0];

    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();

    $Suministro = new Suministro();
    $allSuministro = $Suministro->selectAllSuministro();

    $EstadoDevolucion = new EstadoDevolucion();
    $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();

    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    $msg = NULL;
    
include 'view/verDetallePrestamoSuministro.php';