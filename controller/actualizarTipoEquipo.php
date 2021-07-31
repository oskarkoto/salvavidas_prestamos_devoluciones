<?php
 include "Model/TipoEquipo.php";
 if($_POST){
   $tipoequipo = new TipoEquipo($_POST['idTipoEquipo'], $_POST['nombreTipoEquipo'], $_POST['descripcionTipoEquipo'], 
       $_POST['marcaTipoEquipo'], $_POST['existenciaMinima']);
   $tipoequipo->update_tipo_equipo();
   $rows = $tipoequipo->read_tipo_equipo();
   include 'view/verDetalleTipoEquipo.php';
 }else{
    $tipoequipo = new TipoEquipo();
    $rows = $tipoequipo->read_tipo_equipo($_GET['idTipoEquipo'])[0];
    include "view/actualizarTipoEquipo.php";
 }