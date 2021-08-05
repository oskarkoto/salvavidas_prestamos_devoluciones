<!--Controlador para actualizar un Tipo de Suministro.-->
<?php
include "model/TipoSuministro.php";

if ($_POST) {
    $idTipoSuministro = $_POST['idTipoSuministro'];
    $sTipoSuministro = new TipoSuministro($_POST['idTipoSuministro'], $_POST['nombreTipoSuministro'], $_POST['descripcionTipoSuministro'], $_POST['idCategoria'], $_POST['idUnidades'],$_POST['marcaTipoSuministro'], $_POST['existenciaMinima']);
    if ($sTipoSuministro->updateTipoSuministro()){
        $selectTipoSuministro = $sTipoSuministro->selectTipoSuministro($idTipoSuministro);
        $sTipoSuministro = $selectTipoSuministro[0];
        //Categoria de Suministro
        $CategoriaSuministro = new CategoriaSuministro();
        $allCategoriaSuministro = $CategoriaSuministro->selectAllCategoriaSuministro();
        //Select Unidades de Suministro
        $UnidadesSuministro = new UnidadesSuministro();
        $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();       

        include "view/verDetalleTipoSuministro.php";
    } 
}   else {
    //Tipo de Suministro.
    $sTipoSuministro = new TipoSuministro();
    $selectTipoSuministro = $sTipoSuministro->selectTipoSuministro($_GET['idTipoSuministro']);
    $sTipoSuministro = $selectTipoSuministro[0];    
    //Categoria de Suministro
    $CategoriaSum = new CategoriaSuministro();
    $allCategoriaSuministro = $CategoriaSum->selectAllCategoriaSuministro();
    //Select Unidades de Suministro
    $UnidadesSuministro = new UnidadesSuministro();
    $allUnidadesSuministro = $UnidadesSuministro->selectAllUnidadesSuministro();
    include "view/actualizarTipoSuministro.php";
}


