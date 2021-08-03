<?php
include 'model/UnidadesSuministro.php';

$unidadesSuministroId = (int) $_POST['idUnidades'];
$sUnidadesSuministro = new UnidadesSuministro();
    $selectUnidadesSum = $sUnidadesSuministro->selectUnidadesSuministro($unidadesSuministroId);
    $sUnidadesSuministro = $selectUnidadesSum[0];
    include "view/detalleUnidadesSuministro.php";