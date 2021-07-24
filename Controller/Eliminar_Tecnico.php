<?php
  include "Model/Tecnicos.php";
  $tecnico = new Tecnico();
  $tecnico->delete_tecnicos($_GET['idTecnico']);
  $rows = $tecnico->read_tecnicos();
  include 'View/.php';