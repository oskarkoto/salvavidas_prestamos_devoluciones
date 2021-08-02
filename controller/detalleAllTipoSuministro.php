<?php
include 'model/TipoSuministro.php';
include 'model/CategoriaSuministro.php';

$TipoSuministro = new TipoSuministro();
$allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
//Select de Categoria de Suministro
$CategoriaSuministro = new CategoriaSuministro();
$allCategoriaSuministro = $CategoriaSuministro->selectAllTipoSuministroCategoriaSuministro();
include 'view/allTipoSuministro.php';