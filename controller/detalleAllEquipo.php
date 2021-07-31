<!--Controlador para detallar todos los Equipos.-->
<?php
include 'model/Equipo.php';

$Equipo = new Equipo();
$allEquipo = $Equipo->seleccionarAllEquipo();
include 'view/verAllEquipo.php';