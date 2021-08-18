<!--Controlador para crear Devolucion.-->
<?php

include 'model/Devolucion.php';

if ($_POST) {
    $form = new Devolucion($_POST['idDevolucion'], $_POST['idPrestamo'], $_POST['fechaRealDevolucion'], $_POST['idEstadoDevolucionGeneral']);
    if ($form->insertDevolucion()) {
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();    

        $CondicionActual = new CondicionActual();
        $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
        $Prestamo = $_POST['idPrestamo'];
        //Select de equipos
        $PrestamoEquipo = new PrestamoEquipo();
        $allPrestamoEquipo = $PrestamoEquipo->seleccionarAllPrestamoEquipo();
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
            
        //Select de suministros
        $PrestamoSuministro = new PrestamoSuministro();
        $allPrestamoSuministro = $PrestamoSuministro->seleccionarAllPrestamoSuministro();
        $Suministro = new Suministro();
        $allSuministro = $Suministro->selectAllSuministro();
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();

        $msg = "NUEVA Devolución creada.";
        include "view/crearDevolucionall.php";
    } else {
        $devoluciones = new Devolucion();
        $last =$devoluciones->selectLast();
        $msg = "ERROR creando Devolucion.";
        $Prestamo = new Prestamo();
        $allPrestamo = $Prestamo->seleccionarAllPrestamo();
        $EstadoDevGnrl = new EstadoDevolucionGen();
        $allEstadoDevGnrl = $EstadoDevGnrl->seleccionarAllEstadoDevolucionGen();
        $CondicionActual = new CondicionActual();
        $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
        include "view/crearDevolucion.php";
    }
} else {
    $devoluciones = new Devolucion();
    $last =$devoluciones->selectLast();
    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    
    $EstadoDevGnrl = new EstadoDevolucionGen();
    $allEstadoDevGnrl = $EstadoDevGnrl->seleccionarAllEstadoDevolucionGen();
    
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();  
    include "view/crearDevolucion.php";
}
