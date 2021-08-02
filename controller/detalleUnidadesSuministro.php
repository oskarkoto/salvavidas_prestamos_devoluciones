<?php

include 'model/UnidadesSuministro.php';

$unidadesSuministroId = (int) $_POST['idUnidades'];
$unidadesSuministro = new UnidadesSuministro();
$unidadesSelect = $unidadesSuministro->selectUnidadesSuministro($unidadesSuministroId);
$unidadesSuministro = $unidadesSelect[0];
include "view/singleUnidadesSuministro.php";