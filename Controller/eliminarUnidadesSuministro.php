<!--Controlador para eliminar Unidades de Suministro.-->
<?php
  include "model/UnidadesSuministro.php";

  $idUnidades = $_GET['idUnidades'];
  $UnidadesSuministro = new UnidadesSuministro();    
    if ($UnidadesSuministro->deleteUnidadesSuministro($idUnidades)){
      $msg = "EXITO al borrar la Unidad de Suministro.";
      $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
        include 'view/verAllUnidadesSuministro.php';
    } else {
      $msg = "ERROR al borrar la Unidad de Suministro.";
      $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
        include 'view/verAllUnidadesSuministro.php';
    }    

