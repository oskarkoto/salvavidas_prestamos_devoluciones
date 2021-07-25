<!--Controlador para crear Estado de Devolucion General.-->
<?php

include 'model/EstadoDevolucionGeneral.php';

if ($_POST) {
    $form = new EstadoDevolucionGen($_POST['idEstadoDevolucionGeneral'], $_POST['descripcionEstadoDevolucionGeneral']);
    if ($form->insertEstadoDevolucionGen()) {
        $sEstadoDevolucionGen = $newEstadoDevolucionGen->seleccionarEstadoDevolucionGen($newEstadoDevolucionGen->idEstadoDevolucionGeneral);
        $sEstadoDevolucionGen = $sEstadoDevolucionGen[0];
        include "view/verDetalleEstadoDevolucionGnrl.php";
    } else {
        $msgError = "ERROR creando Estado de Devolución.";
        include "view/nuevoEstadoDevolucionGnrl.php";
    }
} else {
    include "view/nuevoEstadoDevolucionGnrl.php";
}