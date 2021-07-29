<!--Controlador para eliminar Estado de Devolucion General.-->
<?php
include "model/EstadoDevolucionGeneral.php";

    $idEstadoDevolucionGeneral = $_GET['idEstadoDevolucionGeneral'];
    $EstadoDevolucionGeneral = new EstadoDevolucionGen();    
    if ($EstadoDevolucionGeneral->eliminarEstadoDevolucionGen($idEstadoDevolucionGeneral)){
        $msg = "EXITO borrando la devolución general.";
        $allEstadoDevolucionGnrl = $EstadoDevolucionGeneral->seleccionarAllEstadoDevolucionGen();
        include 'view/VerAllEstadoDevolucionGnrl.php';
    } else {
       $msgError = "ERROR borrando la devolución general.";
        $allEstadoDevolucionGnrl = $EstadoDevolucionGeneral->seleccionarAllEstadoDevolucionGen();
        include 'view/VerAllEstadoDevolucionGnrl.php';
    }    

