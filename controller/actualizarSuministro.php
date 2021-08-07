<!--Controlador para actualizar un Suministro.-->
<?php
include "model/Suministro.php";

if ($_POST) {
    $sSuministro = new Suministro($_POST['idSuministro'], $_POST['idTipoSuministro'], $_POST['idCondicionActual'], $_POST['idEstadoInventario'],$_POST['fechaInclusion']);
    if ($sSuministro->updateSuministro()){
        $msg= "Se actualizó el suministro.";
        $selectSuministro = $sSuministro->selectSuministro($_POST['idSuministro']);
        $sSuministro = $selectSuministro[0];
        //Select de tipo suministro  
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
        //Select de estado de inventario
        $EstadoInventario = new EstadoInventario();
        $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
        //Select de condicion actual
        $CondicionActual = new CondicionActual();
        $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
        include "view/verDetalleSuministro.php";
    }      
} else {
    $sSuministro = new Suministro();
    $selectSuministro = $sSuministro->selectSuministro($_GET['idSuministro']);
    $sSuministro = $selectSuministro[0];
    //Select de tipo suministro  
    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    include "view/actualizarSuministro.php";
  }


