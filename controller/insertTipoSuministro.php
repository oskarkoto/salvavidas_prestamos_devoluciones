<?php

include "model/TipoSuministro.php";

if ($_POST) {
    $newTipoSuministro = new TipoSuministro($_POST['idTipoSuministro'], $_POST['nombreTipoSuministro'],
        $_POST['descripcionTipoSuministro'], (int)$_POST['idCategoria'],(int)$_POST['idUnidades'],
        $_POST['marcaTipoSuministro'], (int)$_POST['existenciaMinima']);
    if ($newTipoSuministro->insertTipoSuministro()) {
        $tSuministro = $newTipoSuministro->selectTipoSuministro($newTipoSuministro->id);
        $tSuministro = $tSuministro[0];
        include "view/singleTipoSuministro.php";
    } else {
        $msgError = "ERROR creando Tipo de Suministro.";
        include "view/newTipoSuministro.php";
    }
} else {
    include "view/newTipoSuministro.php";
}