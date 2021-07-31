<!--Controlador para eliminar un Tipo de Equipo.-->
<?php
  include "Model/TipoEquipo.php";

  $idTipoEquipo = $_GET['idTipoEquipo'];
  $TipoEquipo = new TipoEquipo();    
  if ($TipoEquipo->delete_tipo_equipo($idTipoEquipo)){
    $msg = "EXITO borrando el Tipo de Equipo.";
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
      include 'view/verAllTipoEquipo.php';
  } else {
     $msgError = "ERROR borrando el Tipo de Equipo.";
     $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
      include 'view/verAllTipoEquipo.php';
  }    