<?php
  include "Model/Tipo_Equipo.php";

  $idTipoEquipo = $_GET['idTipoEquipo'];
  $TipoEquipo = new TipoEquipo();    
  if ($TipoEquipo->delete_tipo_equipo($idTipoEquipo)){
    $msg = "EXITO borrando el Tipo de Equipo.";
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
      include 'view/verAllTipoEquipo.php';
  } else {
     $msgError = "ERROR borrando el Tipo de Equipo.";
     $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
      include 'view/verAllTipoEquipo.php';
  }    