<!--Controlador para eliminar Devolucion.-->
<?php
include "model/Devolucion.php";

    $idDevolucion = $_GET['idDevolucion'];
    $Devolucion = new Devolucion();    
    if ($Devolucion->eliminarDevolucion($idDevolucion)){
        $msg = "EXITO borrando la devolución.";
        $allDevolucion = $Devolucion->seleccionarAllDevolucion();
        include 'view/VerAllDevolucion.php';
    } else {
       $msgError = "ERROR borrando la devolución.";
        $allDevolucion = $Devolucion->seleccionarAllDevolucion();
        include 'view/VerAllDevolucion.php';
    }    

