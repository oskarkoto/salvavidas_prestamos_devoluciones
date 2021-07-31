<?php
 include "Model/Tecnico.php";
 
 if($_POST){
   $tecnico = new Tecnico($_POST['idTecnico'], $_POST['primerNombre'], $_POST['segundoNombre'], 
       $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['telefono'], $_POST['correoElectronico'], 
       $_POST['direccion'], $_POST['fechaInclusion']);
   $tecnico->update_tecnicos();
   $rows = $tecnico->read_tecnicos($_POST['idTecnico']);
   include 'view/verDetalleTecnico.php';
 }else{
  $tecnico = new Tecnico();
  $rows = $tecnico->read_tecnicos($_GET['idTecnico'])[0];
  include "view/actualizarTecnico.php";
 }