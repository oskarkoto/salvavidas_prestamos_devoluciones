<!--Controlador para detallar todas las Unidades de Suministros.-->
<?php
include 'model/UnidadesSuministro.php';

    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
    $msg = NULL;
    include 'view/verAllUnidadesSuministro.php';