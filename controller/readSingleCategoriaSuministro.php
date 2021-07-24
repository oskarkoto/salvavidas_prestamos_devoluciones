<?php

include 'model/CategoriaSuministro.php';

$catSuministroId = (int) $_POST['idCategoria'];
$catSuministro = new CategoriaSuministro();
$catSelect = $catSuministro->selectCategoriaSuministro($catSuministroId);
$catSuministro = $catSelect[0];
include "view/singleCategoriaSuministro.php";