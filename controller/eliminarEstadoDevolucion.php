<!--Controlador para eliminar Estado de Devolucion.-->
<?php
include "model/EstadoDevolucion.php";

    $idEstadoDevolucion = $_GET['idEstadoDevolucion'];
    $EstadoDevolucion = new EstadoDevolucion();    
    if ($EstadoDevolucion->eliminarEstadoDevolucion($idEstadoDevolucion)){
        $msg = "EXITO borrando el estado de devolución.";
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        include 'view/verAllEstadoDevolucion.php';
    } else {
       $msgError = "ERROR borrando el estado de devolución.";
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        include 'view/verAllEstadoDevolucion.php';
    }    