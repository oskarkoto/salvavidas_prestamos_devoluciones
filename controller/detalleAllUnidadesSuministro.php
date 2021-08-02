<?php

include 'model/UnidadesSuministro.php';

$unidadesSuministro = new UnidadesSuministro();
$allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
include 'view/allUnidadesSuministro.php';