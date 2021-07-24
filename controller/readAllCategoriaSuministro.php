<?php

include 'model/CategoriaSuministro.php';

$catSuministro = new CategoriaSuministro();
$catSuministro = $catSuministro->selectAllCategoriaSuministro();
include 'view/allCategoriaSuministro.php';