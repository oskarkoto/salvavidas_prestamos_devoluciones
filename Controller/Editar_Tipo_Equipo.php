<?php
 include "Model/Tipo_Equipo.php";
 if($_POST){
   $tipoequipo = new TipoEquipo($_POST['idTipoEquipo'], $_POST['nombreTipoEquipo'], $_POST['descripcionTipoEquipo'], 
       $_POST['marcaTipoEquipo'], $_POST['existenciaMinima']);
   $tipoequipo->update_tipo_equipo();
   $rows = $tipoequipo->read_tipo_equipo();
   include 'View/view_.php';
 }else{
  $tipoequipo = new TipoEquipo();
  $row = $tipoequipo->read_tipo_equipo($_GET['idTipoEquipo'])[0];
  include "View/update_.php";
 }