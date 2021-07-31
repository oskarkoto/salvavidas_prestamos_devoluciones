<?php
include 'Model/Equipo.php';

if ($_POST) {
  // Validaciones, instancias de objetos, calculos matematicos
  $equipo = new Equipo(
    $_POST['idEquipo'],
    $_POST['idTipoEquipo'],
    $_POST['idCondicionActual'],
    $_POST['idEstadoInventario'],
    $_POST['fechaInclusion']
  );
  $equipo->create_equipo();
  $rows = $equipo->read_equipo();
  include 'view/crearEquipo.php';
} else {
    $msg= "ERROR al crear el tipo de equipo";
    $Equipo = new Equipo();
    $allEquipo = $Equipo->seleccionarAllEquipo(); 
    include 'view/verAllEquipo.php';
}
