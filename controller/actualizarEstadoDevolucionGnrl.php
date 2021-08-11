<!--Controlador para actualizar un Estado de Devolucion General.-->
<?php
include "model/EstadoDevolucionGeneral.php";

/** 
 * Actualiza la información o bien, muestra la vista para actualizar la información. 
**/

if ($_POST) {
    $sEstadoDevolucionGeneral = new EstadoDevolucionGen($_POST['idEstadoDevolucionGeneral'],$_POST['descripcionEstadoDevolucionGeneral']);
    if ($sEstadoDevolucionGeneral->actualizarEstadoDevolucionGen()){
        $selectEstadoDevolucionGeneral = $sEstadoDevolucionGeneral->seleccionarEstadoDevolucionGen($_POST['idEstadoDevolucionGeneral']);
        $sEstadoDevolucionGeneral = $selectEstadoDevolucionGeneral[0];
        $msg = "Se actualizó el Estado de devolución general.";
        include "view/verDetalleEstadoDevolucionGnrl.php";
    }    
} else {
    $sEstadoDevolucionGeneral = new EstadoDevolucionGen();
    $selectEstadoDevolucionGeneral = $sEstadoDevolucionGeneral->seleccionarEstadoDevolucionGen($_GET['idEstadoDevolucionGeneral']);
    $sEstadoDevolucionGeneral = $selectEstadoDevolucionGeneral[0];
    include "view/actualizarEstadoDevolucionGnrl.php";
}