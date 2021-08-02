<?php
include "model/Suministro.php";

if ($_POST) {
    $mySuministro = new Suministro($_POST['idSuministro'], $_POST['idTipoSuministro'],
        (int)$_POST['idCondicionActual'], (int)$_POST['idEstadoInventario'],$_POST['fechaInclusion']);
    if ($mySuministro->updateSuministro()){
        include "view/sucessEditSuministro.php";
    } else {
       $msgError = "ERROR editando el Suministro.";
       include "view/updateSuministro.php"; 
    }    
} else {
    $mySuministroId = $_GET['idSuministro'];
    $viewSuministro = new Suministro();
    $selectSuministro = $viewSuministro->selectSuministro($myTipoSuministroId);
    $viewSuministro = $selectSuministro[0];
    $mySuministro = new Suministro($viewSuministro->idSuministro, $viewSuministro->idTipoSuministro, 
        $viewSuministro->idCondicionActual, $viewSuministro->idEstadoInventario,
        $viewSuministro->fechaInclusion);
    include "view/updateSuministro.php";
}