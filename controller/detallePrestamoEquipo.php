<!--Controlador para detallar un Prestamo de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';

$prestamoEquipoId = $_POST['idPrestamoEquipo'];
$sPrestamoEquipo = new PrestamoEquipo();
$selectPrestamoEquipo = $sPrestamoEquipo->seleccionarPrestamoEquipo($prestamoEquipoId);
$sPrestamoEquipo = $selectPrestamoEquipo[0];

include 'view/verDetallePrestamoEquipo.php';