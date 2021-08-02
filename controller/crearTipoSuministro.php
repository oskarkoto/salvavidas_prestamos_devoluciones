<!--Controlador para crear un Tipo de Suministro.-->
<?php

include 'model/TipoSuministro.php';
include 'model/CategoriaSuministro.php';

if ($_POST) {
    $form = new TipoSuministro($_POST['idTipoSuministro'], $_POST['nombreTipoSuministro'],
    $_POST['descripcionTipoSuministro'],$_POST['idCategoria'],$_POST['idUnidades'],
    $_POST['marcaTipoSuministro'],$_POST['existenciaMinima']);
    if ($form->insertTipoSuministro()) {
        $selectTipoSuministro = $form->selectTipoSuministro($form->idTipoSuministro);
        $form = $selectTipoSuministro[0];
        //Select de categoria
        $CategoriaSuministro = new CategoriaSuministro();
        $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
        include "view/verDetalleTipoSuministro.php";
    } else {
        $msgError = "ERROR creando el Tipo de Suministro.";
        include "view/crearSuministro.php";
    }
} else {
    //Select de categoria
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
    include 'view/crearTipoSuministro.php';
}