<!--Controlador para detallar un Tecnico.-->
<?php
include 'model/Equipo.php';

$equipoId = $_GET['idEquipo'];
$sEquipo = new Equipo();
$selectEquipo = $sEquipo->read_equipo($equipoId);
$sEquipo = $selectEquipo[0];

include 'view/verDetalleEquipo.php';