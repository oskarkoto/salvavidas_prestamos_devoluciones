<?php
include "model/CategoriaSuministro.php";

if ($_POST) {
    $myCategoria = new CategoriaSuministro($_POST['idCategoria'], $_POST['descripcionCategoria']);
    if ($myCategoria->updateCategoriaSuministro()){
        include "view/sucessEditCategoriaSuministro.php";
    } else {
       $msgError = "ERROR editando la categoría.";
       include "view/updateCategoriaSuministro.php"; 
    }    
} else {
    $myCategoriaId = (int) $_GET['idCategoria'];
    $viewCategoria = new CategoriaSuministro();
    $viewCategoria = $viewCategoria->selectCategoriaSuministro($myCategoriaId);
    $myCategoria = new CategoriaSuministro($viewCategoria[0]->idCategoria, $viewCategoria[0]->descripcionCantegoria);
    include "view/updateCategoriaSuministro.php";
}