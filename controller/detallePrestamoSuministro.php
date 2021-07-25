<!--Controlador para detallar un Prestamo de Suministro.-->
<?php
include 'model/PrestamoSuministro.php';

$prestamoSuministroId = $_POST['idPrestamoSuministro'];
$sPrestamoSuministro = new PrestamoSuministro();
$selectPrestamoSuministro = $sPrestamoSuministro->seleccionarPrestamoSuministro($prestamoSuministroId);
$sPrestamoSuministro = $selectPrestamoSuministro[0];

include 'view/verDetallePrestamoSuministro.php';