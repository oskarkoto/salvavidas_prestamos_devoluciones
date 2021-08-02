<?php
include 'model/Equipo.php';
include 'model/TipoEquipo.php';
include 'model/EstadoInventario.php';
include 'model/CondicionActual.php';

if ($_POST) {
  $sEquipo = new Equipo($_POST['idEquipo'], $_POST['idTipoEquipo'], $_POST['idCondicionActual'], 
  $_POST['idEstadoInventario'], $_POST['fechaInclusion']);
  if ($sEquipo->update_equipo()){
      $selectEquipo = $sEquipo->read_equipo($_POST['idEquipo']);
      $sEquipo = $selectEquipo[0];
      include "view/verDetalleEquipo.php";
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
  include "view/actualizarEquipo.php";
}
