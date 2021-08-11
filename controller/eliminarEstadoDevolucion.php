<!--Controlador para eliminar Estado de Devolucion.-->
<?php
include "model/EstadoDevolucion.php";

    $idEstadoDevolucion = $_GET['idEstadoDevolucion'];
    $EstadoDevolucion = new EstadoDevolucion();    
    if ($EstadoDevolucion->eliminarEstadoDevolucion($idEstadoDevolucion)){
        $msg = "EXITO al borrar el Estado de Devolución.";
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        include 'view/verAllEstadoDevolucion.php';
    } else {
       $msg = "ERROR al borrar el Estado de Devolución.";
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        include 'view/verAllEstadoDevolucion.php';
    }    