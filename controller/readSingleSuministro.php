<?php

include 'model/Suministro.php';

$suministroId = $_POST['idSuministro'];
$sSuministro = new Suministro();
$sSelect = $sSuministro->selectSuministro($tSuministroId);
$sSuministro = $sSelect[0];
include "view/singleSuministro.php";