<!--Controlador para eliminar un Suministro.-->
<?php
  include "model/Suministro.php";

  $idSuministro = $_GET['idSuministro'];
  $Suministro = new Suministro();    
    if ($Suministro->deleteSuministro($idSuministro)){
      $msg = "EXITO al borrar el Suministro.";
      $allSuministro = $Suministro->selectAllSuministro();
      //Select de Tipo Suministro
      $TipoSuministro = new TipoSuministro();
      $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
      //Select de Condicion Actual
      $CondicionActual = new CondicionActual();
      $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
      //Select de Estado en Inventario
      $EstadoInventario = new EstadoInventario();
      $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
        include 'view/verAllSuministro.php';
    } else {
      $msg = "ERROR al borrar el Suministro.";
      $allSuministro = $Suministro->selectAllSuministro();
      //Select de Tipo Suministro
      $TipoSuministro = new TipoSuministro();
      $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
      //Select de Condicion Actual
      $CondicionActual = new CondicionActual();
      $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
      //Select de Estado en Inventario
      $EstadoInventario = new EstadoInventario();
      $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
        include 'view/verAllSuministro.php';
      }    
