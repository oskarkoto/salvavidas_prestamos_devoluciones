<?php
include 'Model/TipoEquipo.php';

if ($_POST) {
  // Validaciones, instancias de objetos, calculos matematicos
  $form = new TipoEquipo( $_POST['idTipoEquipo'], $_POST['nombreTipoEquipo'], $_POST['descripcionTipoEquipo'],
      $_POST['marcaTipoEquipo'], $_POST['existenciaMinima']);
      
  if($form->create_tipo_equipo()){
    $selectTipoEquipo  = $form->read_tipo_equipo($form->idTipoEquipo);
    $form = $selectTipoEquipo[0];
    include "view/verDetalleTipoEquipo.php";
  } else {
    $msgError = "ERROR creando el Tipo de equipo.";
    include "view/crearTipoEquipo.php";
  }
} else {  
  include 'view/crearTipoEquipo.php';
}


