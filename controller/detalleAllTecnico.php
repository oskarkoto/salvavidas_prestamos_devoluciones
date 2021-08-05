<!--Controlador para detallar todos los Tecnicos.-->
<?php
include 'model/Tecnico.php';

$Tecnico = new Tecnico();
$allTecnico = $Tecnico->seleccionarAllTecnico();
include 'view/verAllTecnico.php';