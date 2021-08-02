<?php

include 'model/TipoSuministro.php';

$tSuministroId = $_POST['idTipoSuministro'];
$tSuministro = new TipoSuministro();
$tSelect = $tSuministro->selectTipoSuministro($tSuministroId);
$tSuministro = $tSelect[0];
include "view/singleTipoSuministro.php";