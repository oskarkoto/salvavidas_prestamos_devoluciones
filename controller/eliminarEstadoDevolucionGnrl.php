<!--Controlador para eliminar Estado de Devolucion General.-->
<?php
include "model/EstadoDevolucionGeneral.php";

if (isset($_GET['idEstadoDevolucionGeneral'])) {
    $viewEstadoDevolucionGnrl = new EstadoDevolucionGen();    
    if ($viewEstadoDevolucionGnrl->eliminarEstadoDevolucionGen($idEstadoDevolucionGeneral)){
        $msg = "EXITO borrando el estado de devolución general.";
        include "view/VerAllEstadoDevolucionGnrl.php";
    } else {
       $msgError = "ERROR borrando el estado de devolución general.";
       include "view/detalleEstadoDevolucionGnrl.php"; 
    }    
} else {
    $idEstadoDevolucionGeneral = $_GET['idEstadoDevolucionGeneral'];
    $viewEstadoDevolucionGnrl = new EstadoDevolucionGen(); 
    $selectEstadoDevolucionGnrl = $viewEstadoDevolucionGnrl->seleccionarEstadoDevolucionGen($idEstadoDevolucionGeneral);
    $viewEstadoDevolucionGnrl = $selectEstadoDevolucionGnrl[0];
    $myEstadoDevolucionGnrl = new EstadoDevolucionGen($viewEstadoDevolucionGnrl->idEstadoDevolucionGeneral, 
    $viewEstadoDevolucionGnrl->descripcionEstadoDevolucionGeneral);
    include "view/detalleEstadoDevolucionGnrl.php";
}