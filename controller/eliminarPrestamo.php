<!--Controlador para eliminar Prestamo.-->
<?php
include "model/Prestamo.php";

$idPrestamo = $_GET['idPrestamo'];
$Prestamo = new Prestamo();    
if ($Prestamo->eliminarPrestamo($idPrestamo)){
  $msg = "EXITO borrando el Prestamo.";
  $allPrestamo = $Prestamo->seleccionarAllPrestamo();
  $Tecnico = new Tecnico();
  $allTecnico = $Tecnico->seleccionarAllTecnico();
    include 'view/verAllPrestamo.php';
} else {
   $msgError = "ERROR borrando el Prestamo.";
   $allPrestamo = $Prestamo->seleccionarAllPrestamo();
   $Tecnico = new Tecnico();
   $allTecnico = $Tecnico->seleccionarAllTecnico();
    include 'view/verAllPrestamo.php';
}    
