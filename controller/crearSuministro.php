<!--Controlador para crear Suministro.-->
<?php
include 'model/Suministro.php';

if ($_POST) {
    $form = new Suministro($_POST['idSuministro'], $_POST['idTipoSuministro'],
    (int)$_POST['idCondicionActual'], (int)$_POST['idEstadoInventario'],$_POST['fechaInclusion']);
    if ($form->insertSuministro()) {
        $selectSuministro = $form->selectSuministro($form->idSuministro);
        $form = $selectSuministro[0];
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
    } else {
        //Select de tipo suministro  
        $TipoSuministro = new TipoSuministro();
        $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
        //Select de estado de inventario
        $EstadoInventario = new EstadoInventario();
        $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
        //Select de condicion actual
        $CondicionActual = new CondicionActual();
        $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
        $msgError = "ERROR creando Suministro.";
        include "view/crearSuministro.php";
    }
} else {
    //Select de tipo suministro  
    $TipoSuministro = new TipoSuministro();
    $allTipoSuministro = $TipoSuministro->selectAllTipoSuministro();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    include 'view/crearSuministro.php';
}