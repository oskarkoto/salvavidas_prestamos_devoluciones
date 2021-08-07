<!--Controlador para detallar todos los Equipos.-->
<?php
include 'model/Equipo.php';

$Equipo = new Equipo();
    $allEquipo = $Equipo->seleccionarAllEquipo();
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    include 'view/verAllEquipo.php';