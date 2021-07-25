<!--Controlador para detallar todos los Prestamos de Suministro.-->
<?php
include 'model/PrestamoSuministro.php';

$prestamoSuministro = new PrestamoSuministro();
$allPrestamoSuministro = $prestamoSuministro->seleccionarAllPrestamoSuministro();
include 'view/VerAllPrestamoSuministro.php';