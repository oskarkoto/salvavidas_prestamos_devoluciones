<!--Controlador para crear Unidades de Suministro.-->
<?php

include "model/UnidadesSuministro.php";

if ($_POST) {
    $form = new UnidadesSuministro($_POST['cantidad']);
    if ($form->insertUnidadesSuministro()) {
        $allUnidadesSuministro = $form->selectAllUnidadesSuministro();
        $msg = "NUEVA Unidad de Suministro creada.";
        include "view/verAllUnidadesSuministro.php";
    } else {
        $msg = "ERROR creando la Unidad de Suministro.";
        include "view/crearUnidadesSuministro.php";
    }
} else {
    include 'view/crearUnidadesSuministro.php';
}