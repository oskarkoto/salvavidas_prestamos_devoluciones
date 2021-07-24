<?php

include 'model/CategoriaSuministro.php';

$catSuministroId = (int) $_POST['idCategoria'];
$catSuministro = new CategoriaSuministro();
$catSuministro = $catSuministro->selectCategoriaSuministro($catSuministroId);
$catSuministro = $catSuministro[0];
include "view/singleCategoriaSuministro.php";