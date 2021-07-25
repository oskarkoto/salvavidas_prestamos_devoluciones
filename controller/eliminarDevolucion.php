<!--Controlador para eliminar Devolucion.-->
<?php
include "model/Devolucion.php";

if (isset($_GET['idDevolucion'])) {
    $viewDevolucion = new Devolucion();    
    if ($viewDevolucion->eliminarDevolucion($idDevolucion)){
        $msg = "EXITO borrando la Devolucion.";
        include "view/VerAllDevolucion.php";
    } else {
       $msgError = "ERROR borrando la Devolucion.";
       include "view/detalleDevolucion.php"; 
    }    
} else {
    $idDevolucion = $_GET['idDevolucion'];
    $viewDevolucion = new Devolucion(); 
    $selectDevolucion = $viewDevolucion->seleccionarDevolucion($idDevolucion);
    $viewDevolucion = $selectDevolucion[0];
    $myDevolucion = new Devolucion($viewDevolucion->idDevolucion, $viewDevolucion->idPrestamo, 
        $viewDevolucion->fechaRealDevolucion, $viewDevolucion->idEstadoDevolucionGeneral);
    include "view/detalleDevolucion.php";
}