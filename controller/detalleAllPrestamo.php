<!--Controlador para detallar todos los Prestamos.-->
<?php
include 'model/Prestamo.php';

    $Prestamo = new Prestamo();
    $allPrestamo = $Prestamo->seleccionarAllPrestamo();
    $Tecnico = new Tecnico();
    $allTecnico = $Tecnico->seleccionarAllTecnico();
include 'view/VerAllPrestamo.php';