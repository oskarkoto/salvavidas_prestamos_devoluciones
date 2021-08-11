<!--Controlador para detallar un Tecnico.-->
<?php
include 'model/Equipo.php';

$equipoId = $_GET['idEquipo'];
$sEquipo = new Equipo();
    $selectEquipo = $sEquipo->read_equipo($equipoId);
    $sEquipo = $selectEquipo[0];
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    $msg = NULL;
    include 'view/verDetalleEquipo.php';