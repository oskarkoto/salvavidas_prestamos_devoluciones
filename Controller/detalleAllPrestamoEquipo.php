<!--Controlador para detallar todos los Prestamos de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';

        $prestamoEquipo = new PrestamoEquipo();
        $allPrestamoEquipo = $prestamoEquipo->seleccionarAllPrestamoEquipo();
        //Select Equipo
        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        //Select Estado de Devolucion
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        //Select Tipo Equipo
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
        $msg = NULL;
        include 'view/verAllPrestamoEquipo.php';