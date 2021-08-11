<!--Controlador para actualizar un Estado de Devolucion.-->
<?php
include "model/EstadoDevolucion.php";

/** 
 * Actualiza la información o bien, muestra la vista para actualizar la información. 
**/

if ($_POST) {
    $sEstadoDevolucion = new EstadoDevolucion($_POST['idEstadoDevolucion'],$_POST['descripcionEstadoDevolucion']);
    if ($sEstadoDevolucion->actualizarEstadoDevolucion()){
        $selectEstadoDevolucion = $sEstadoDevolucion->seleccionarEstadoDevolucion($_POST['idEstadoDevolucion']);
        $sEstadoDevolucion = $selectEstadoDevolucion[0];
        $msg = "Se actualizó el Estado de devolución.";
        include "view/verDetalleEstadoDevolucion.php";
    }    
    
} else {
    $sEstadoDevolucion = new EstadoDevolucion();
    $selectEstadoDevolucion = $sEstadoDevolucion->seleccionarEstadoDevolucion($_GET['idEstadoDevolucion']);
    $sEstadoDevolucion = $selectEstadoDevolucion[0];
    include "view/actualizarEstadoDevolucion.php";
}