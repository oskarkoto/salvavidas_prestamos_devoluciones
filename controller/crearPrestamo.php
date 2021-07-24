<!--Controlador para crear Prestamo.-->
<?php

include 'model/Prestamo.php';
$form = new Prestamo($_POST['idPrestamo'], $_POST['idTecnico'], $_POST['fechaPrestamo'], $_POST['fechaEsperadaDevolucion']);
include 'view/crearPrestamo.php';

?>