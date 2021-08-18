<!--Controlador para eliminar un Tipo de Equipo.-->
<?php
  include "Model/TipoEquipo.php";

  $idTipoEquipo = $_GET['idTipoEquipo'];
  $TipoEquipo = new TipoEquipo();    
  if ($TipoEquipo->delete_tipo_equipo($idTipoEquipo)){
    $msg = "EXITO al borrar el Tipo de Equipo.";
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
      include 'view/verAllTipoEquipo.php';
  } else {
     $msg = "ERROR al borrar el Tipo de Equipo.";
     $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
      include 'view/verAllTipoEquipo.php';
  }    