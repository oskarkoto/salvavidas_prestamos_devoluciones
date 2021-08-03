<?php
include 'model/UnidadesSuministro.php';

    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
    include 'view/verAllUnidadesSuministro.php';