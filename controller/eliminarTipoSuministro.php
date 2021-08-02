<?php
include "model/TipoSuministro.php";

if (isset($_GET['answer'])) {
    $idTipoSuministro = $_GET['idTipoSuministro'];
    $viewTipoSuministro = new TipoSuministro();    
    if ($viewTipoSuministro->deleteTipoSuministro($idTipoSuministro)){
        include "view/successDeleteTipoSuministro.php";
    } else {
       $msgError = "ERROR borrando el Tipo de Suministro.";
       include "view/singleTipoSuministro.php"; 
    }    
} else {
    $idTipoSuministro = $_GET['idTipoSuministro'];
    $viewTipoSuministro = new TipoSuministro(); 
    $selectTipoSuministro = $viewTipoSuministro->selectTipoSuministro($idTipoSuministro);
    $viewTipoSuministro = $selectTipoSuministro[0];
    $myTipoSuministro = new TipoSuministro($viewTipoSuministro->idTipoSuministro, $viewTipoSuministro->nombreTipoSuministro, 
        $viewTipoSuministro->descripcionTipoSuministro, $viewTipoSuministro->idCategoria,
        $viewTipoSuministro->idUnidades, $viewTipoSuministro->marcaTipoSuministro,$viewTipoSuministro->existenciaMinima);
    include "view/confirmDeleteTipoSuministro.php";
}
