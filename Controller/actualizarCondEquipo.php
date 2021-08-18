<?php
include 'model/Devolucion.php';
if ($_POST) {
  $sEquipo = new Equipo($_POST['idEquipo'], $_POST['idTipoEquipo'], $_POST['idCondicionActual'], $_POST['idEstadoInventario']);
  if ($sEquipo->update_equipo_condicion()){
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
  //Select de equipo
  $sEquipo = new Equipo();
  $selectEquipo = $sEquipo->read_equipo($_GET['idEquipo']);
  $sEquipo = $selectEquipo[0];
  //Select de tipo equipo  
  $TipoEquipo = new TipoEquipo();
  $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
  //Select de estado de inventario
  $EstadoInventario = new EstadoInventario();
  $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
  //Select de condicion actual
  $CondicionActual = new CondicionActual();
  $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
  $devoluciones = new Devolucion();
  $last =$devoluciones->selectLastAll();
  include "view/actualizarCondEquipo.php";
}
