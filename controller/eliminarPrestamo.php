<!--Controlador para eliminar Prestamo.-->
<?php
include "model/Prestamo.php";

if (isset($_GET['idPrestamo'])) {
    $viewPrestamo = new Prestamo();    
    if ($viewPrestamo->eliminarPrestamo($idPrestamo)){
        $msg = "EXITO borrando el Préstamo.";
        include "view/VerAllPrestamo.php";
    } else {
       $msgError = "ERROR borrando el Préstamo.";
       include "view/detallePrestamo.php"; 
    }    
} else {
    $idPrestamo = $_GET['idPrestamo'];
    $viewPrestamo = new Prestamo(); 
    $selectPrestamo = $viewPrestamo->seleccionarPrestamo($idPrestamo);
    $viewPrestamo = $selectPrestamo[0];
    $myPrestamo = new Prestamo($viewPrestamo->idPrestamo, $viewPrestamo->idTecnico, 
        $viewPrestamo->fechaPrestamo, $viewPrestamo->fechaEsperadaDevolucion,$viewPrestamo->cliente);
    include "view/detallePrestamo.php";
}