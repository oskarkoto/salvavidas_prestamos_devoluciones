<!--Controlador para actualizar las Unidades de Suministro.-->
<?php
include "model/UnidadesSuministro.php";

if ($_POST) {
    $sUnidadesSum = new UnidadesSuministro($_POST['idUnidades'],$_POST['cantidad']);
    if ($sUnidadesSum->updateSuministro()){
        $msg= "Se actualizó la unidad de suministro.";
        $selectUnidadesSum = $sUnidadesSum->selectUnidadesSuministro($_POST['idUnidades']);
        $sUnidadesSum = $selectUnidadesSum[0];
        include "view/verDetalleUnidadesSuministro.php";
    }    
    
} else {
    $sUnidadesSum = new UnidadesSuministro();
    $selectUnidadesSum = $sUnidadesSum->selectUnidadesSuministro($_GET['idUnidades']);
    $sUnidadesSum = $selectUnidadesSum[0];
    include "view/actualizarUnidadesSuministro.php";
}

