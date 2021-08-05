<!--Controlador para detallar todos los Tipos de Equipos.-->
<?php
include 'model/TipoEquipo.php';

$TipoEquipo = new TipoEquipo();
$allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
include 'view/verAllTipoEquipo.php';