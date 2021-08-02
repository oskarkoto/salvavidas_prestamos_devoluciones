<!--Controlador para crear Unidades de Suministro.-->
<?php

include "model/UnidadesSuministro.php";

if ($_POST) {
    $form = new UnidadesSuministro($_POST['cantidad']);
    if ($form->insertUnidadesSuministro()) {
        $allUnidadesSum = $form->selectAllUnidadesSuministro();
        include "view/verAllUnidadesSuministro.php";
    } else {
        $msgError = "ERROR creando el Tipo de Suministro.";
        //Select de categoria
        $CategoriaSuministro = new CategoriaSuministro();
        $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
        include "view/crearUnidadesSuministro.php";
    }
} else {
    //Select de categoria
    $CategoriaSuministro = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
    include 'view/crearUnidadesSuministro.php';
}