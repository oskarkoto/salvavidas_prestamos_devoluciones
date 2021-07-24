<?php

include "model/UnidadesSuministro.php";

$lastUnidades = new UnidadesSuministro();
$lastId = $lastUnidades->selectLast();
$newId = (int) $lastId[0]->id;
$newId++;

if ($_POST) {
    $newUnidades = new UnidadesSuministro($newId, (int)$_POST['cantidad']);
    if ($newUnidades->insertUnidadesSuministro()) {
        $unidadesSuministro = $newUnidades->selectUnidadesSuministro($newUnidades->id);
        $unidadesSuministro = $unidadesSuministro[0];
        include "view/singleUnidadesSuministro.php";
    } else {
        $msgError = "ERROR creando item de Unidades Suministro.";
        include "view/newUnidadesSuministro.php";
    }
} else {
    include "view/newUnidadesSuministro.php";
}