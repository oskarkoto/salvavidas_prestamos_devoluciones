<!--Controlador para eliminar un Tipo de Suministro.-->
<?php
  include "model/TipoSuministro.php";

  $idTipoSuministro = $_GET['idTipoSuministro'];
  $TipoSuministro = new TipoSuministro();    
  if ($TipoSuministro->deleteTipoSuministro($idTipoSuministro)){
    $msg = "EXITO borrando el Suministro.";
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    //Categoria de Suministro
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
    //Select Unidades de Suministro
    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();       
    include 'view/verAllTipoSuministro.php';
  } else {
     $msgError = "ERROR borrando el Suministro.";
     $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro(); 
     include 'view/verAllTipoSuministro.php';
  }    


