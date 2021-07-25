<!--Controlador para eliminar Estado de Devolucion.-->
<?php
include "model/EstadoDevolucion.php";

if (isset($_GET['idEstadoDevolucion'])) {
    $viewEstadoDevolucion = new EstadoDevolucion();    
    if ($viewEstadoDevolucion->eliminarEstadoDevolucion($idEstadoDevolucion)){
        $msg = "EXITO borrando el estado de devolución.";
        include "view/VerAllEstadoDevolucion.php";
    } else {
       $msgError = "ERROR borrando el estado de devolución.";
       include "view/detalleEstadoDevolucion.php"; 
    }    
} else {
    $idEstadoDevolucion = $_GET['idEstadoDevolucion'];
    $viewEstadoDevolucion = new EstadoDevolucion(); 
    $selectEstadoDevolucion = $viewEstadoDevolucion->seleccionarEstadoDevolucion($idEstadoDevolucion);
    $viewEstadoDevolucion = $selectEstadoDevolucion[0];
    $myEstadoDevolucion = new EstadoDevolucion($viewEstadoDevolucion->idEstadoDevolucion, 
    $viewEstadoDevolucion->descripcionEstadoDevolucion);
    include "view/detalleEstadoDevolucion.php";
}