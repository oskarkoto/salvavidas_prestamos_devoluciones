<!--Controlador para detallar todos los Prestamos de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';

$prestamoEquipo = new PrestamoEquipo();
$allPrestamoEquipo = $prestamoEquipo->seleccionarAllPrestamoEquipo();
include 'view/VerAllPrestamoEquipo.php';