<!--Controlador para detallar un Prestamo de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';

$prestamoEquipoId = $_GET['idPrestamoEquipo'];
$sPrestamoEquipo = new PrestamoEquipo();
        $selectPrestamoEquipo = $sPrestamoEquipo->seleccionarPrestamoEquipo($prestamoEquipoId);
        $sPrestamoEquipo = $selectPrestamoEquipo[0];
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();        
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
        $msg = NULL;
        include 'view/verDetallePrestamoEquipo.php';
