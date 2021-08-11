<!--Controlador para eliminar un Equipo.-->
<?php
  include "Model/Equipo.php";

  $idEquipo = $_GET['idEquipo'];
  $Equipo = new Equipo();    
  if ($Equipo->delete_equipo($idEquipo)){
    $msg = "EXITO al borrar el Equipo.";
    $allEquipo = $Equipo->seleccionarAllEquipo();
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();    
      include 'view/verAllEquipo.php';
  } else {
    $msg = "ERROR al borrar el Equipo.";
    $allEquipo = $Equipo->seleccionarAllEquipo();
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
      include 'view/verAllEquipo.php';
  }    