<!--Controlador para eliminar Estado de Devolucion General.-->
<?php
include "model/EstadoDevolucionGeneral.php";

    $idEstadoDevolucionGeneral = $_GET['idEstadoDevolucionGeneral'];
    $EstadoDevolucionGeneral = new EstadoDevolucionGen();    
    if ($EstadoDevolucionGeneral->eliminarEstadoDevolucionGen($idEstadoDevolucionGeneral)){
        $msg = "EXITO al borrar la Devolución General.";
        $allEstadoDevolucionGnrl = $EstadoDevolucionGeneral->seleccionarAllEstadoDevolucionGen();
        include 'view/VerAllEstadoDevolucionGnrl.php';
    } else {
        $msg = "ERROR al borrar la Devolución General.";
        $allEstadoDevolucionGnrl = $EstadoDevolucionGeneral->seleccionarAllEstadoDevolucionGen();
        include 'view/VerAllEstadoDevolucionGnrl.php';
    }    

