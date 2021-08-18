<!--Modelo de reporte de tipo 1.-->
<?php

class ReporteTipo1 {
    
    public $idEquipo;
    public $nombreTipoEquipo;
    public $descripcionCondicionActual;
    public $descripcionEstadoInventario;
    public $fechaInclusion;

    public function __construct( $idEquipo = "",$nombreTipoEquipo = "",$descripcionCondicionActual= "", 
    $descripcionEstadoInventario = "", $fechaInclusion = "") {
        $this->idEquipo = $idEquipo;
        $this->nombreTipoEquipo = $nombreTipoEquipo;
        $this->descripcionCondicionActual = $descripcionCondicionActual;
        $this->descripcionEstadoInventario = $descripcionEstadoInventario;
        $this->fechaInclusion = $fechaInclusion;
    }
}