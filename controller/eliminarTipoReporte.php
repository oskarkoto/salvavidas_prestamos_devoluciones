<!--Controlador para eliminar Tipo de Reporte.-->
<?php
  include "model/TipoReporte.php";

  $idTipoReporte = $_GET['idTipoReporte'];
  $TipoReporte = new TipoReporte();
  if ($TipoReporte->eliminarTipoReporte($idTipoReporte)){
    $msg = "ÉXITO al borrar el Tipo de Reporte.";
    $allTipoReporte = $TipoReporte->seleccionarAllTipoReporte();
    include 'view/verAllTipoReporte.php';
   } else {
        $msg = "ERROR al borrar el Tipo de Reporte.";
        $allTipoReporte = $TipoReporte->seleccionarAllTipoReporte();
        include 'view/verAllTipoReporte.php';
    }    
