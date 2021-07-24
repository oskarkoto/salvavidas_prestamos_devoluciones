<?php
  include "Model/Equipo.php";
  $equipo = new Equipo();
  $equipo->delete_equipo($_GET['idEquipo']);
  $rows = $equipo->read_equipo();
  include 'View/.php';