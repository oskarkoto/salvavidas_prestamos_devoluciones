<!--Controlador para detallar todos los Suministros.-->
<?php
include 'model/Suministro.php';

    $Suministro = new Suministro();
    $allSuministro = $Suministro->selectAllSuministro();
    //Select de Tipo Suministro
    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    //Select de Condicion Actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    //Select de Estado en Inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    $msg = NULL;
    include 'view/verAllSuministro.php';