<?php
include "model/Suministro.php";

if (isset($_GET['answer'])) {
    $idSuministro = $_GET['idSuministro'];
    $viewSuministro = new Suministro();    
    if ($viewSuministro->deleteSuministro($idSuministro)){
        include "view/successDeleteSuministro.php";
    } else {
       $msgError = "ERROR borrando el Suministro.";
       include "view/singleSuministro.php"; 
    }    
} else {
    $idSuministro = $_GET['idSuministro'];
    $viewSuministro = new Suministro(); 
    $selectSuministro = $viewSuministro->selectSuministro($idSuministro);
    $viewSuministro = $selectSuministro[0];
    $mySuministro = new Suministro($viewSuministro->idSuministro, $viewSuministro->idTipoSuministro, 
        $viewSuministro->idCondicionActual, $viewSuministro->idEstadoInventario,
        $viewSuministro->fechaInclusion);
    include "view/confirmDeleteSuministro.php";
}

