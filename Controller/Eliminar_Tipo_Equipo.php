<?php
  include "Model/Tipo_Equipo.php";
  $tipoequipo = new TipoEquipo();
  $tipoequipo->delete_tipo_equipo($_GET['idTipoEquipo']);
  $rows = $tipoequipo->read_tipo_equipo();
  include 'View/.php';