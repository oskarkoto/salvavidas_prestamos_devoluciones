<!--Controlador para crear un Tipo de Suministro.-->
<?php
include 'model/TipoSuministro.php';

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
        //Select de Unidades de Suministro
        $UnidadesSuministro = new UnidadesSuministro();
        $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
        $msg = "NUEVO Tipo de Suministro creado.";
        include "view/verDetalleTipoSuministro.php";
    } else {
        $msg = "ERROR creando el Tipo de Suministro.";
        include "view/crearSuministro.php";
    }
} else {
    //Select de categoria
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
    //Select de Unidades de Suministro
    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();    
    include 'view/crearTipoSuministro.php';
}