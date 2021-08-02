<!--Controlador para eliminar un Suministro.-->
<?php
  include "model/Suministro.php";

  $idSuministro = $_GET['idSuministro'];
  $Suministro = new Suministro();    
  if ($Suministro->deleteSuministro($idSuministro)){
    $msg = "EXITO borrando el Suministro.";
    $allSuministro = $Suministro->selectAllSuministro();
      include 'view/verAllSuministro.php';
  } else {
     $msgError = "ERROR borrando el Suministro.";
     $allSuministro = $Suministro->selectAllSuministro();
      include 'view/verAllSuministro.php';
  }    

