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
    $idCategoria = $_GET['uEmail'];
    $idCategoria = (int) $_GET['idCategoria'];
    $viewCategoria = new CategoriaSuministro(); 
    $viewCategoria = $viewCategoria->selectCategoriaSuministro($idCategoria);
    $myCategoria = new CategoriaSuministro($viewCategoria[0]->idCategoria, $viewCategoria[0]->descripcionCantegoria);
    include "view/confirmDeleteCategoriaSuministro.php";
}

