<?php

include 'model/TipoSuministro.php';

$tSuministro = new TipoSuministro();
$allTipoSuministro = $tSuministro->selectAllTipoSuministro();
include 'view/allTipoSuministro.php';