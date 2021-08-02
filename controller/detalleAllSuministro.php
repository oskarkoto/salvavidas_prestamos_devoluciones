<?php

include 'model/Suministro.php';

$sSuministro = new Suministro();
$allSuministro = $sSuministro->selectAllSuministro();
include 'view/allSuministro.php';