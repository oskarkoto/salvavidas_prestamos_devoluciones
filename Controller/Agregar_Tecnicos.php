<?php
include 'Model/Tecnicos.php';
if ($_POST) {
  // Validaciones, instancias de objetos, calculos matematicos
  $tecnico = new Tecnico(
    $_POST['idTecnico'],
    $_POST['primerNombre'],
    $_POST['segundoNombre'],
    $_POST['primerApellido'],
    $_POST['segundoApellido'],
    $_POST['telefono'],
    $_POST['correoElectronico'],
    $_POST['direccion'],
    $_POST['fechaInclusion']
  );
  $tecnico->create_tecnico();
  $rows = $tecnico->read_tecnicos();
  include 'View/Muchas.php';
} else {
  include "View/Error.php";
}
