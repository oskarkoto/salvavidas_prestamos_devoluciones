<!--Controlador para actualizar un Tipo de Suministro.-->
<?php
include "model/TipoSuministro.php";

if ($_POST) {
    $sTipoSuministro = new TipoSuministro($_POST['idTipoSuministro'], $_POST['nombreTipoSuministro'], $_POST['descripcionTipoSuministro'], 
    $_POST['idCategoria'], $_POST['idUnidades'],$_POST['marcaTipoSuministro'], $_POST['existenciaMinima']);
    if ($sTipoSuministro->updateTipoSuministro()){
        $msg= "Se actualizó el tipo de suministro.";
        $selectTipoSuministro = $sTipoSuministro->selectTipoSuministro($_POST['idTipoSuministro']);
        $sTipoSuministro = $selectTipoSuministro[0];
        //Categoria de Suministro
        $CategoriaSum = new CategoriaSuministro();
        $allCategoriaSum = $CategoriaSum->selectAllCategoriaSuministro();
        include "view/verDetalleTipoSuministro.php";
    }    
    
} else {
    //Tipo de Suministro.
    $sTipoSuministro = new TipoSuministro();
    $selectTipoSuministro = $sTipoSuministro->selectTipoSuministro($_GET['idTipoSuministro']);
    $sTipoSuministro = $selectTipoSuministro[0];
    //Categoria de Suministro
    $CategoriaSum = new CategoriaSuministro();
    $allCategoriaSum = $CategoriaSum->selectAllCategoriaSuministro();
    include "view/actualizarTipoSuministro.php";
}

