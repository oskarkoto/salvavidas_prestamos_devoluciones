<?php
include "model/CategoriaSuministro.php";

if (isset($_GET['answer'])) {
    $idCategoria = (int) $_GET['idCategoria'];
    $viewCategoria = new CategoriaSuministro();    
    if ($viewCategoria->deleteCategoriaSuministro($idCategoria)){
        include "view/successDeleteCategoriaSuministro.php";
    } else {
       $msgError = "ERROR borrando la categoría.";
       include "view/singleCategoriaSuministro.php"; 
    }    
} else {
    $idCategoria = (int) $_GET['idCategoria'];
    $viewCategoria = new CategoriaSuministro(); 
    $selectCategoria = $viewCategoria->selectCategoriaSuministro($idCategoria);
    $viewCategoria = $selectCategoria[0];
    $myCategoria = new CategoriaSuministro($viewCategoria->idCategoria, $viewCategoria->descripcionCantegoria);
    include "view/confirmDeleteCategoriaSuministro.php";
}

