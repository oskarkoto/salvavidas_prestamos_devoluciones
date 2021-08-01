<?php
include 'model/Equipo.php';
include 'model/TipoEquipo.php';
include 'model/EstadoInventario.php';
include 'model/CondicionActual.php';

 if($_POST){
   $equipo = new Equipo($_POST['idEquipo'], $_POST['idTipoEquipo'], $_POST['idCondicionActual'], 
       $_POST['idEstadoInventario'], $_POST['fechaInclusion']);
   $equipo->update_equipo();
   $rows = $equipo->read_equipo();
   include 'view/verDetalleEquipo.php';
 }else{
   //Select de Equipo 
    $equipo = new Equipo();
    $row = $equipo->read_equipo($_GET['idEquipo'])[0];
    //Select de tipo equipo  
    $TipoEquipo = new TipoEquipo();
    $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
    //Select de estado de inventario
    $EstadoInventario = new EstadoInventario();
    $allEstadoInventario = $EstadoInventario->seleccionarAllEstadoInventario();
    //Select de condicion actual
    $CondicionActual = new CondicionActual();
    $allCondicionActual = $CondicionActual->seleccionarAllCondicionActual();
    include "view/actualizarEquipo.php";
 }