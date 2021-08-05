<!--Controlador para crear Unidades de Suministro.-->
<?php

include "model/UnidadesSuministro.php";

if ($_POST) {
    $form = new UnidadesSuministro($_POST['cantidad']);
    if ($form->insertUnidadesSuministro()) {
        $allUnidadesSuministro = $form->selectAllUnidadesSuministro();
        include "view/verAllUnidadesSuministro.php";
    } else {
        $msgError = "ERROR creando la Unidad de Suministro.";
        include "view/crearUnidadesSuministro.php";
    }
} else {
    include 'view/crearUnidadesSuministro.php';
}