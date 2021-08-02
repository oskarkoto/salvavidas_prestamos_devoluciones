<?php
include 'model/TipoSuministro.php';

$TipoSuministro = new TipoSuministro();
$allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
//Select de Categoria de Suministro
$CategoriaSuministro = new CategoriaSuministro();
$allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
include 'view/verAllTipoSuministro.php';