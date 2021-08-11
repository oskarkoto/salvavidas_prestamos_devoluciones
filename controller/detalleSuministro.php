<!--Controlador para detallar un Suministro.-->
<?php
include 'model/Suministro.php';

$suministroId = $_GET['idSuministro'];
$sSuministro = new Suministro();

    $selectSuministro = $sSuministro->selectSuministro($suministroId);
    $sSuministro = $selectSuministro[0];
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
    
    include "view/verDetalleSuministro.php";