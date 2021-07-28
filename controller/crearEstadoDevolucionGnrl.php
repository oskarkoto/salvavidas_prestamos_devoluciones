<!--Controlador para crear Estado de Devolucion General.-->
<?php
include 'model/EstadoDevolucionGeneral.php';

if ($_POST) {
    $form = new EstadoDevolucionGen($_POST['idEstadoDevolucionGeneral'], $_POST['descripcionEstadoDevolucionGeneral']);
    if ($form->insertEstadoDevolucionGen()) {
        $selectEstadoDevolucionGeneral = $form->seleccionarEstadoDevolucionGen($form->idEstadoDevolucionGeneral);
        $form = $selectEstadoDevolucionGeneral[0];
        include "view/verDetalleEstadoDevolucionGnrl.php";
    } else {
        $msgError = "ERROR creando Estado de Devolución.";
        include "view/crearEstadoDevolucionGnrl.php";
    }
} else {
    include "view/crearEstadoDevolucionGnrl.php";
}