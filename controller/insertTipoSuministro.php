<?php

include "model/TipoSuministro.php";

if ($_POST) {
    $newTipoSuministro = new TipoSuministro($_POST['idTipoSuministro'], $_POST['nombreTipoSuministro'],
        $_POST['descripcionTipoSuministro'], $_POST['idCategoria'],$_POST['idUnidades'],
        $_POST['marcaTipoSuministro'],$_POST['existenciaMinima']);
    if ($newTipoSuministro->insertTipoSuministro()) {
        $tSuministro = $newTipoSuministro->selectTipoSuministro($newUnidades->id);
        $tSuministro = $tSuministro[0];
        include "view/singleTipoSuministro.php";
    } else {
        $msgError = "ERROR creando Tipo de Suministro.";
        include "view/newTipoSuministro.php";
    }
} else {
    include "view/newTipoSuministro.php";
}