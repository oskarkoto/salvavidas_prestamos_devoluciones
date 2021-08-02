<?php
include "model/UnidadesSuministro.php";

if ($_POST) {
    $myUnidades = new UnidadesSuministro((int)$_POST['idUnidades'], (int)$_POST['cantidad']);
    if ($myUnidades->updateUnidadesSuministro()){
        include "view/sucessEditUnidadesSuministro.php";
    } else {
       $msgError = "ERROR editando el item de Unidades de Suministro.";
       include "view/updateUnidadesSuministro.php"; 
    }    
} else {
    $myUnidadesId = (int) $_GET['idCategoria'];
    $viewUnidades = new UnidadesSuministro();
    $selectUnidades = $viewUnidades->selectUnidadesSuministro($myUnidadesId);
    $viewUnidades = $selectUnidades[0];
    $myUnidades = new UnidadesSuministro($viewUnidades->idUnidades, $viewUnidades->cantidad);
    include "view/updateUnidadesSuministro.php";
}