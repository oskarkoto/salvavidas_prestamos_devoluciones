<?php
 include "Model/Tecnicos.php";
 if($_POST){
   $tecnico = new Tecnico($_POST['idTecnico'], $_POST['primerNombre'], $_POST['segundoNombre'], 
       $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['telefono'], $_POST['correoElectronico'], 
       $_POST['direccion'], $_POST['fechaInclusion']);
   $tecnico->update_tecnicos();
   $rows = $tecnico->read_tecnicos();
   include 'View/view_.php';
 }else{
  $tecnico = new Tecnico();
  $row = $tecnico->read_tecnicos($_GET['idTecnico'])[0];
  include "View/update_.php";
 }