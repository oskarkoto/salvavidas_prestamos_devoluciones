<!--Controlador para eliminar un Tipo de Suministro.-->
<?php
  include "model/TipoSuministro.php";

  $idTipoSuministro = $_GET['idTipoSuministro'];
  $TipoSuministro = new TipoSuministro();    
  if ($TipoSuministro->deleteTipoSuministro($idTipoSuministro)){
    $msg = "EXITO al borrar el Tipo de Suministro.";
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    //Categoria de Suministro
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
    //Select Unidades de Suministro
    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();       
    include 'view/verAllTipoSuministro.php';
  } else {
     $msg = "ERROR al borrar el Tipo de Suministro.";
     $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro(); 
     include 'view/verAllTipoSuministro.php';
  }    


