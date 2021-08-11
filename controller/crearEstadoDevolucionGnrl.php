<!--Controlador para crear Estado de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

if ($_POST) {
    $form = new EstadoDevolucionGen($_POST['idEstadoDevolucionGeneral'], $_POST['descripcionEstadoDevolucionGeneral']);
    if ($form->insertEstadoDevolucionGen()) {
        $selectEstadoDevolucionGeneral = $form->seleccionarEstadoDevolucionGen($form->idEstadoDevolucionGeneral);
        $form = $selectEstadoDevolucionGeneral[0];
        $msg = "NUEVO Estado de Devolución General creado.";
        include "view/verDetalleEstadoDevolucionGnrl.php";
    } else {
        $msg = "ERROR creando Estado de Devolución General.";
        include "view/crearEstadoDevolucionGnrl.php";
    }
} else {
    include "view/crearEstadoDevolucionGnrl.php";
}