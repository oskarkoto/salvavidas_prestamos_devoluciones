<?php
include "model/TipoSuministro.php";

if ($_POST) {
    $myTipoSuministro = new TipoSuministro($_POST['idTipoSuministro'], $_POST['nombreTipoSuministro'],
        $_POST['descripcionTipoSuministro'], $_POST['idCategoria'],$_POST['idUnidades'],
        $_POST['marcaTipoSuministro'],$_POST['existenciaMinima']);
    if ($myTipoSuministro->updateTipoSuministro()){
        include "view/sucessEditTipoSuministro.php";
    } else {
       $msgError = "ERROR editando el tipo de Suministro.";
       include "view/updateTipoSuministro.php"; 
    }    
} else {
    $myTipoSuministroId = $_GET['idTipoSuministro'];
    $viewTipoSuministro = new TipoSuministro();
    $selectTipoSuministro = $viewTipoSuministro->selectTipoSuministro($myTipoSuministroId);
    $viewTipoSuministro = $selectTipoSuministro[0];
    $myTipoSuministro = new TipoSuministro($viewTipoSuministro->idTipoSuministro, 
    $viewTipoSuministro->nombreTipoSuministro,$viewTipoSuministro->descripcionTipoSuministro,
    $viewTipoSuministro->idCategoria,$viewTipoSuministro->idUnidades,
    $viewTipoSuministro->marcaTipoSuministro,$viewTipoSuministro->existenciaMinima);
    include "view/updateTipoSuministro.php";
}