<!--Controlador para detallar todos los Prestamos de Equipo.-->
<?php
include 'model/PrestamoEquipo.php';

        $prestamoEquipo = new PrestamoEquipo();
        $allPrestamoEquipo = $prestamoEquipo->seleccionarAllPrestamoEquipo();

        $Equipo = new Equipo();
        $allEquipo = $Equipo->seleccionarAllEquipo();
        
        $EstadoDevolucion = new EstadoDevolucion();
        $allEstadoDevolucion = $EstadoDevolucion->seleccionarAllEstadoDevolucion();
        
        $TipoEquipo = new TipoEquipo();
        $allTipoEquipo = $TipoEquipo->seleccionarAllTipoEquipo();
            include 'view/verAllPrestamoEquipo.php';