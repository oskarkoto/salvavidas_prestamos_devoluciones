<?php
  include "Model/Tecnico.php";

  $idTecnico = $_GET['idTecnico'];
  $tecnico = new Tecnico();    
  if ($tecnico->delete_tecnicos($idTecnico)){
    $msg = "EXITO borrando el Técnico.";
    $allTecnico = $Equipo->seleccionarAllTecnico();
      include 'view/verAllTecnico.php';
  } else {
     $msgError = "ERROR borrando el Técnico.";
     $allTecnico = $Equipo->seleccionarAllTecnico();
      include 'view/verAllTecnico.php';
  }    