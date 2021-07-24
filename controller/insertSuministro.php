<?php

include "model/Suministro.php";

if ($_POST) {
    $mySuministro = new Suministro($_POST['idSuministro'], $_POST['idTipoSuministro'],
        (int)$_POST['idCondicionActual'], (int)$_POST['idEstadoInventario'],$_POST['fechaInclusion']);
    if ($newSuministro->insertSuministro()) {
        $sSuministro = $newSuministro->selectSuministro($newSuministro->id);
        $sSuministro = $sSuministro[0];
        include "view/singleSuministro.php";
    } else {
        $msgError = "ERROR creando Suministro.";
        include "view/newSuministro.php";
    }
} else {
    include "view/newSuministro.php";
}