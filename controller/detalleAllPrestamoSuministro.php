<!--Controlador para detallar todos los Prestamos de Suministro.-->
<?php
include 'model/PrestamoSuministro.php';

    $prestamoSuministro = new PrestamoSuministro();
    $allPrestamoSuministro = $prestamoSuministro->seleccionarAllPrestamoSuministro();

    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();

    $Suministro = new Suministro();
    $allSuministro = $Suministro->selectAllSuministro();

    $EstadoDevolucion = new EstadoDevolucion();
    $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();

    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
include 'view/verAllPrestamoSuministro.php';