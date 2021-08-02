<?php
include 'model/TipoSuministro.php';
include 'model/CategoriaSuministro.php';

$tSuministroId = $_GET['idTipoSuministro'];
$TipoSuministro = new TipoSuministro();

    $selectTipoSuministro = $TipoSuministro->selectTipoSuministro($tSuministroId);
    $TipoSuministro = $selectTipoSuministro[0];
    //Select de Categoria de Suministro
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllTipoSuministroCategoriaSuministro();
    include "view/detalleTipoSuministro.php";