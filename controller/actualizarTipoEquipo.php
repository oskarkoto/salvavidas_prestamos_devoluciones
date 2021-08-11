<?php
 include "Model/TipoEquipo.php";

 if ($_POST) {
  $sTipoEquipo = new TipoEquipo($_POST['idTipoEquipo'], $_POST['nombreTipoEquipo'], $_POST['descripcionTipoEquipo'], 
  $_POST['marcaTipoEquipo'], $_POST['existenciaMinima']);
  if ($sTipoEquipo->update_tipo_equipo()){
      $selectTipoEquipo = $sTipoEquipo->read_tipo_equipo($_POST['idTipoEquipo']);
      $sTipoEquipo = $selectTipoEquipo[0];
      $msg = "Se actualizó el Tipo de equipo.";
      include "view/verDetalleTipoEquipo.php";
  }    
  
} else {
  $sTipoEquipo = new TipoEquipo();
  $selectTipoEquipo = $sTipoEquipo->read_tipo_equipo($_GET['idTipoEquipo']);
  $sTipoEquipo = $selectTipoEquipo[0];
  include "view/actualizarTipoEquipo.php";
}
 
