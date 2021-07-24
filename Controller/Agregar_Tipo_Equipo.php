<?php
include 'Model/Tipo_Equipo.php';
if ($_POST) {
  // Validaciones, instancias de objetos, calculos matematicos
  $tipoequipo = new TipoEquipo(
    $_POST['idTipoEquipo'],
    $_POST['nombreTipoEquipo'],
    $_POST['descripcionTipoEquipo'],
    $_POST['marcaTipoEquipo'],
    $_POST['existenciaMinima']
  );
  $tipoequipo->create_tipo_equipo();
  $rows = $tipoequipo->read_tipo_equipo();
  include 'View/Muchas.php';
} else {
  include "View/Error.php";
}
