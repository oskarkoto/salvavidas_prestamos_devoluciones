<!--Controlador para actualizar un Suministro.-->
<?php
include "model/Devolucion.php";

if ($_POST) {
    $sSuministro = new Suministro($_POST['idSuministro'], $_POST['idTipoSuministro'], $_POST['idCondicionActual'], $_POST['idEstadoInventario']);
    if ($sSuministro->updateSuministroCondicion()){
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
        $devoluciones = new Devolucion();
        $last =$devoluciones->selectLastAll();
        $msg = NULL;
        include "view/crearDevolucionall.php";
    }      
} else {
    //Select de suministro
    $sSuministro = new Suministro();
    $selectSuministro = $sSuministro->selectSuministro($_GET['idSuministro']);
    $sSuministro = $selectSuministro[0];
    //Select de tipo suministro  
    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    $devoluciones = new Devolucion();
  $last =$devoluciones->selectLastAll();
    include "view/actualizarCondSuministro.php";
  }