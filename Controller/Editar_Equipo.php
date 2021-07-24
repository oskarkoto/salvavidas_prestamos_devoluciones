<?php
 include "Model/Equipo.php";
 if($_POST){
   $equipo = new Equipo($_POST['idEquipo'], $_POST['idTipoEquipo'], $_POST['idCondicionActual'], 
       $_POST['idEstadoInventario'], $_POST['fechaInclusion']);
   $equipo->update_equipo();
   $rows = $equipo->read_equipo();
   include 'View/view_.php';
 }else{
  $equipo = new Equipo();
  $row = $equipo->read_equipo($_GET['idEquipo'])[0];
  include "View/update_.php";
 }