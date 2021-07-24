<?php

include 'model/CategoriaSuministro.php';

$catSuministro = new CategoriaSuministro();
$allCategoriaSuministro = $catSuministro->selectAllCategoriaSuministro();
include 'view/allCategoriaSuministro.php';