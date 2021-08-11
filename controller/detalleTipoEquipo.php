<!--Controlador para detallar un Tipo de Equipo.-->
<?php
include 'model/TipoEquipo.php';

$tipoEquipoId = $_GET['idTipoEquipo'];
$sTipoEquipo = new TipoEquipo();
$selectTipoEquipo = $sTipoEquipo->read_tipo_equipo($tipoEquipoId);
$sTipoEquipo = $selectTipoEquipo[0];
$msg = NULL;

include 'view/verDetalleTipoEquipo.php';