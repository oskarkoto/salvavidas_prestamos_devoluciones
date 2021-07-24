<?php
include "model/CategoriaSuministro.php";

if ($_POST) {
    $myCategoria = new CategoriaSuministro((int)$_POST['idCategoria'], $_POST['descripcionCategoria']);
    if ($myCategoria->updateCategoriaSuministro()){
        include "view/sucessEditCategoriaSuministro.php";
    } else {
       $msgError = "ERROR editando la categoría.";
       include "view/updateCategoriaSuministro.php"; 
    }    
} else {
    $myCategoriaId = (int) $_GET['idCategoria'];
    $viewCategoria = new CategoriaSuministro();
    $selectCategoria = $viewCategoria->selectCategoriaSuministro($myCategoriaId);
    $viewCategoria = $selectCategoria[0];
    $myCategoria = new CategoriaSuministro($viewCategoria->idCategoria, $viewCategoria->descripcionCantegoria);
    include "view/updateCategoriaSuministro.php";
}