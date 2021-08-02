<?php
include 'model/Suministro.php';
include 'model/TipoSuministro.php';
include 'model/CondicionActual.php';
include 'model/EstadoInventario.php';

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
    include 'view/detalleAllSuministro.php';