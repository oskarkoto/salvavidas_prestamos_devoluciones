<?php
include "model/UnidadesSuministro.php";

if (isset($_GET['answer'])) {
    $idUnidades = (int) $_GET['idUnidades'];
    $viewUnidades = new UnidadesSuministro();    
    if ($viewUnidades->deleteUnidadesSuministro($idUnidades)){
        include "view/successDeleteUnidadesSuministro.php";
    } else {
       $msgError = "ERROR borrando el item de Unidades de Suministro.";
       include "view/singleUnidadesSuministro.php"; 
    }    
} else {
    $idUnidades = (int) $_GET['idUnidades'];
    $viewUnidades = new UnidadesSuministro(); 
    $selectUnidades = $viewUnidades->selectUnidadesSuministro($idUnidades);
    $viewUnidades = $selectUnidades[0];
    $myUnidades = new UnidadesSuministro($viewUnidades->idUnidades, $viewUnidades->descripcionUnidades);
    include "view/confirmDeleteUnidadesSuministro.php";
}

