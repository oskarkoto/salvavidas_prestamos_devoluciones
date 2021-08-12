<!--Modelo de reporte de tipo 6.-->
<?php

class ReporteTipo6 {
    
    public $idTipoEquipo;
    public $nombreTipoEquipo;
    public $descripcionTipoEquipo;
    public $marcaTipoEquipo;
    public $existenciaMinima;
    public $existenciaActual;

    public function __construct( $idTipoEquipo = "",$nombreTipoEquipo = "",$descripcionTipoEquipo= "", 
    $marcaTipoEquipo = "", $existenciaMinima = 0, $existenciaActual = 0) {
        $this->idTipoEquipo = $idTipoEquipo;
        $this->nombreTipoEquipo = $nombreTipoEquipo;
        $this->descripcionTipoEquipo = $descripcionTipoEquipo;
        $this->marcaTipoEquipo = $marcaTipoEquipo;
        $this->existenciaMinima = $existenciaMinima;
        $this->existenciaActual = $existenciaActual;
    }
}