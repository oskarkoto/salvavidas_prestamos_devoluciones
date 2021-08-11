<!--Controlador para detallar todos los Tipos de Equipos.-->
<?php
include 'model/TipoEquipo.php';

$TipoEquipo = new TipoEquipo();
$allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
$msg = NULL;
include 'view/verAllTipoEquipo.php';