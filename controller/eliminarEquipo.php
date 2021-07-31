<?php
  include "Model/Equipo.php";

  $idEquipo = $_GET['idEquipo'];
  $Equipo = new Equipo();    
  if ($Equipo->delete_equipo($idEquipo)){
    $msg = "EXITO borrando el Equipo.";
    $allEquipo = $Equipo->seleccionarAllEquipo();
      include 'view/verAllEquipo.php';
  } else {
     $msgError = "ERROR borrando el Equipo.";
     $allEquipo = $Equipo->seleccionarAllEquipo();
      include 'view/verAllEquipo.php';
  }    