<!--Controlador para detallar todos los Tipos de Suministros.-->
<?php
include 'model/TipoSuministro.php';

$TipoSuministro = new TipoSuministro();
$allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
//Select de Categoria de Suministro
$CategoriaSuministro = new CategoriaSuministro();
$allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
//Select de Unidades de Suministro
$UnidadesSuministro = new UnidadesSuministro();
$allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
$msg = NULL;
include 'view/verAllTipoSuministro.php';