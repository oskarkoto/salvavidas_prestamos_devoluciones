<?php

include_once "model/Connection.php";

/**
 * Manage Suministro
 */
class Suministro {

    public $idSuministro;
    public $idTipoSuministro;
    public $idCondicionActual;
    public $idEstadoInventario;
    public $fechaInclusion;
    
    
    /**
     * Initial values
     * @param string $idSuministro
     * @param string $idTipoSuministro
     * @param int $idCondicionActual
     * @param int $idEstadoInventario
     * @param date $fechaInclusion
     */
    public function __construct($id = "", $tipo = "", $condicion = 0, $inventario = 0, $fecha = "") {
        $this->idSuministro = $id;
        $this->idTipoSuministro = $tipo;
        $this->idCondicionActual = $condicion;
        $this->idEstadoInventario = $inventario;
        $this->fechaInclusion = $fecha;
    }

    /**
     * Insert Suministro in DB
     * @return boolean
     */
    function insertSuministro() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO suministro (idSuministro, idTipoSuministro, idCondicionActual,"
        . "idEstadoInventario, fechaInclusion) VALUES "
        . "('{$this->idSuministro}','{$this->idTipoSuministro}','{$this->idCondicionActual}',"
        . "'{$this->idEstadoInventario}','{$this->fechaInclusion}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }
    
    /**
     * Get all suministros from DB
     * @param int $idSuministro
     * @return Suministro list
     */
    function selectAllSuministro() {
        $query = "SELECT * FROM suministro";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new Suministro($row['idSuministro'], $row['idTipoSuministro'],
            $row['idCondicionActual'], $row['idEstadoInventario'],$row['fechaInclusion']);
        }
        return $rows;
    }      
      
    /**
     * Get suministro from DB
     * @param int $idSuministro
     * @return Suministro list
     */
    function selectSuministro($id = "") {
        $query = "SELECT * FROM suministro";
        if ($id) {
            $query .= " where idSuministro = '$id'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new Suministro($row['idSuministro'], $row['idTipoSuministro'],
            $row['idCondicionActual'], $row['idEstadoInventario'],$row['fechaInclusion']);
        }
        return $rows;
    }      
    
    /**
     * Update Suministro information
     * @return result of update
     */
    function updateSuministro(){
        $query = "UPDATE suministro "
                . "SET idTipoSuministro='{$this->idTipoSuministro},'"
                . "idCondicionActual='{$this->idCondicionActual}', idEstadoInventario='{$this->idEstadoInventario},"
                . "fechaInclusion='{$this->fechaInclusion}'"
                . " where idSuministro='{$this->idSuministro}'";
        $pdo = new Connection();
        $results = $pdo->open()->query($query);
        return $results->execute();
    }
    
    /**
     * Deletes an suministro
     * @param int $idSuministro
     * @return result of deletion
     */
    function deleteSuministro($idSuministro){
        $pdo = new Connection();
        //delete suministro with idSuministro = $idSuministro from suministro table
        $queryDelete = "DELETE FROM suministro WHERE idSuministro = '{$idSuministro}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}