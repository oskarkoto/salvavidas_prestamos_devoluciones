<?php
include 'model/TipoSuministro.php';

$tSuministroId = $_GET['idTipoSuministro'];
$TipoSuministro = new TipoSuministro();

    $selectTipoSuministro = $TipoSuministro->selectTipoSuministro($tSuministroId);
    $TipoSuministro = $selectTipoSuministro[0];
    //Select de Categoria de Suministro
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
    //Select Unidades de Suministro
    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
    include "view/verDetalleTipoSuministro.php";