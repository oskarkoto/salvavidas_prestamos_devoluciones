<?php
include 'model/Equipo.php';


if ($_POST) {
  // Validaciones, instancias de objetos, calculos matematicos
  $form = new Equipo($_POST['idEquipo'], $_POST['idTipoEquipo'], $_POST['idCondicionActual'], $_POST['idEstadoInventario'], $_POST['fechaInclusion']);
  if($form->create_equipo()){
    $selectEquipo  = $form->read_equipo($form->idEquipo);
    $form = $selectEquipo[0];
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    $msg = "NUEVO Equipo creado.";
    include "view/verDetalleEquipo.php";
  } else {
    $msg = "ERROR creando El Equipo.";
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();    
    include "view/crearEquipo.php";
  }
} else {
  //Select de tipo equipo  
  $TipoEquipo = new TipoEquipo();
  $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
  //Select de estado de inventario
  $EstadoInventario = new EstadoInventario();
  $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
  //Select de condicion actual
  $CondicionActual = new CondicionActual();
  $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
  include 'view/crearEquipo.php';
}