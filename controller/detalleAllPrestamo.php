<!--Controlador para detallar todos los Prestamos.-->
<?php
include 'model/Prestamo.php';

$Prestamo = new Prestamo();
$allPrestamo = $Prestamo->seleccionarAllPrestamo();
include 'view/VerAllPrestamo.php';