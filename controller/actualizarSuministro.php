<!--Controlador para actualizar un Suministro.-->
<?php
include "model/Suministro.php";

if ($_POST) {
    $sSuministro = new Suministro($_POST['idSuministro'], $_POST['idTipoSuministro'],
    $_POST['idCondicionActual'], $_POST['idEstadoInventario'],$_POST['fechaInclusion']);
    if ($sSuministro->updateSuministro()){
        $msg= "Se actualizó el suministro.";
        $selectSuministro = $sSuministro->selectSuministro($_POST['idSuministro']);
        $sSuministro = $selectSuministro[0];
        include "view/verDetalleSuministro.php";
    }    
    
} else {
    $sSuministro = new EstadoDevolucion();
    $selectSuministro = $sSuministro->selectSuministro($_GET['idSuministro']);
    $sSuministro = $selectSuministro[0];
    include "view/actualizarSuministro.php";
}

