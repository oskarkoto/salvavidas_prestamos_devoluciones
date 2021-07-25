<!--Controlador para eliminar Prestamo de Suministro.-->
<?php
include "model/PrestamoSuministro.php";

if (isset($_GET['idPrestamoSuministro'])) {
    $viewPrestamoSuministro = new PrestamoSuministro();    
    if ($viewPrestamoSuministro->eliminarPrestamoSuministro($idPrestamoSuministro)){
        $msg = "EXITO borrando el Préstamo de suministro.";
        include "view/VerAllPrestamoSuministro.php";
    } else {
       $msgError = "ERROR borrando el Préstamo.";
       include "view/detallePrestamoSuministro.php"; 
    }    
} else {
    $idPrestamoSuministro = $_GET['idPrestamoSuministro'];
    $viewPrestamoSuministro = new PrestamoSuministro(); 
    $selectPrestamoSuministro = $viewPrestamoSuministro->seleccionarPrestamoSuministro($idPrestamoSuministro);
    $viewPrestamoSuministro = $selectPrestamoSuministro[0];
    $myPrestamoSuministro = new PrestamoSuministro($viewPrestamoSuministro->idPrestamoSuministro, $viewPrestamoSuministro->idPrestamo, 
        $viewPrestamoSuministro->idSuministro, $viewPrestamoSuministro->idEstadoDevolucion);
    include "view/detallePrestamoSuministro.php";
}