<!--Controlador para eliminar Unidades de Suministro.-->
<?php
  include "model/UnidadesSuministro.php";

  $idUnidades = $_GET['idUnidades'];
  $UnidadesSuministro = new UnidadesSuministro();    
  if ($UnidadesSuministro->deleteUnidadesSuministro($idUnidades)){
    $msg = "EXITO borrando la Unidad de Suministro.";
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
      include 'view/verAllUnidadesSuministro.php';
  } else {
     $msgError = "ERROR borrando la Unidad de Suministro.";
     $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
      include 'view/verAllUnidadesSuministro.php';
  }    

