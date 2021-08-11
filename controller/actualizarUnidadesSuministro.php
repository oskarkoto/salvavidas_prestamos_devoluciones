<!--Controlador para actualizar las Unidades de Suministro.-->
<?php
include "model/UnidadesSuministro.php";

if ($_POST) {
    $UnidadesSuministro = new UnidadesSuministro($_POST['cantidad'],$_POST['idUnidades']);
    if ($UnidadesSuministro->updateUnidadesSuministro()){
        $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
        $msg= "Se actualizó la Unidad de suministro.";
        include "view/verAllUnidadesSuministro.php";
    }    
    
} else {
    $sUnidadesSum = new UnidadesSuministro();
    $selectUnidadesSum = $sUnidadesSum->selectUnidadesSuministro($_GET['idUnidades']);
    $sUnidadesSum = $selectUnidadesSum[0];
    include "view/actualizarUnidadesSuministro.php";
}

