<?php

include "model/CategoriaSuministro.php";

$lastCategoria = new CategoriaSuministro();
$lastId = $lastCategoria->selectLastId();
$newId = (int) $lastId[0]->id;
$newId++;

if ($_POST) {
    $newCategoria = new CategoriaSuministro($newId, $_POST['descripcionCategoria']);
    if ($newCategoria->insertCategoriaSuministro()) {
        $catSuministro = $newCategoria->selectCategoriaSuministro($newCategoria->id);
        $catSuministro = $catSuministro[0];
        include "view/singleCategoriaSuministro.php";
    } else {
        $msgError = "ERROR creando Categoria Suministro.";
        include "view/newCategoriaSuministro.php";
    }
} else {
    include "view/newCategoriaSuministro.php";
}