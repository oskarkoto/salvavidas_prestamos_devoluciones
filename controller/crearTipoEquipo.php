<?php
include 'Model/TipoEquipo.php';

if ($_POST) {

  $tipoequipo = new TipoEquipo(
    $_POST['idTipoEquipo'],
    $_POST['nombreTipoEquipo'],
    $_POST['descripcionTipoEquipo'],
    $_POST['marcaTipoEquipo'],
    $_POST['existenciaMinima']
  );
  $tipoequipo->create_tipo_equipo();
  $rows = $tipoequipo->read_tipo_equipo();
  include 'view/crearTipoEquipo.php';
} else {
    $msg= "ERROR al crear el tipo de equipo";
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo(); 
    include "view/verAllTipoEquipo.php";
}
