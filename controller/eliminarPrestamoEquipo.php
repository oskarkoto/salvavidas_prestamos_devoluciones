<!--Controlador para eliminar Prestamo de Equipo.-->
<?php
include "model/PrestamoEquipo.php";

if (isset($_GET['idPrestamoEquipo'])) {
    $viewPrestamoEquipo = new PrestamoEquipo();    
    if ($viewPrestamoEquipo->eliminarPrestamoEquipo($idPrestamoEquipo)){
        $msg = "EXITO borrando el Préstamo de equipo.";
        include "view/VerAllPrestamoEquipo.php";
    } else {
       $msgError = "ERROR borrando el Préstamo.";
       include "view/detallePrestamoEquipo.php"; 
    }    
} else {
    $idPrestamoEquipo = $_GET['idPrestamoEquipo'];
    $viewPrestamoEquipo = new PrestamoEquipo(); 
    $selectPrestamoEquipo = $viewPrestamoEquipo->seleccionarPrestamoEquipo($idPrestamoEquipo);
    $viewPrestamoEquipo = $selectPrestamoEquipo[0];
    $myPrestamoEquipo = new PrestamoEquipo($viewPrestamoEquipo->idPrestamoEquipo, $viewPrestamoEquipo->idPrestamo, 
        $viewPrestamoEquipo->idEquipo, $viewPrestamoEquipo->idEstadoDevolucion);
    include "view/detallePrestamoEquipo.php";
}