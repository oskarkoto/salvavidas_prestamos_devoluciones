<?php

include_once "model/Connection.php";
include_once "model/CategoriaSuministro.php";
include_once "model/UnidadesSuministro.php";

/**
 * Manage Unidades de Suministro
 */
class TipoSuministro {

    public $idTipoSuministro;
    public $nombreTipoSuministro;
    public $descripcionTipoSuministro;
    public $idCategoria;
    public $idUnidades;
    public $marcaTipoSuministro;
    public $existenciaMinima;
    
    /**
     * Initial values
     * @param string $idTipoSuministro
     * @param string $nombreTipoSuministro
     * @param string $descripcionTipoSuministro
     * @param int $idCategoria
     * @param int $idUnidades
     * @param string $marcaTipoSuministro
     * @param int $existenciaMinima
     */
    public function __construct($id = "", $nombre = "", $descripcion = "", $idCategoria = 0, $idUnidades = 0, 
    $marca = "", $existencia = 0) {
        $this->idTipoSuministro = $id;
        $this->nombreTipoSuministro = $nombre;
        $this->descripcionTipoSuministro = $descripcion;
        $this->idCategoria = $idCategoria;
        $this->idUnidades = $idUnidades;
        $this->marcaTipoSuministro = $marca;
        $this->existenciaMinima = $existencia;
    }

    /**
     * Insert Tipo de Suministro in DB
     * @return boolean
     */
    function insertTipoSuministro() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO tipoSuministro (idTipoSuministro, nombreTipoSuministro, descripcionTipoSuministro,"
        . "idCategoria, idUnidades, marcaTipoSuministro, existenciaMinima) VALUES "
        . "('{$this->idTipoSuministro}','{$this->nombreTipoSuministro}','{$this->descripcionTipoSuministro}','{$this->idCategoria}',"
        . "'{$this->idUnidades}','{$this->marcaTipoSuministro}','{$this->existenciaMinima}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }
    
    /**
     * Get all tipos de suministro from DB
     * @param int $idTipoSuministro
     * @return TipoSuministro list
     */
    function selectAllTipoSuministro() {
        $query = "SELECT * FROM tipoSuministro";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new TipoSuministro($row['idTipoSuministro'], $row['nombreTipoSuministro'],
            $row['descripcionTipoSuministro'], $row['idCategoria'],$row['idUnidades'], 
            $row['marcaTipoSuministro'],$row['existenciaMinima']);
        }
        return $rows;
    }      
      
    /**
     * Get tipos de suministro from DB
     * @param int $idTipoSuministro
     * @return tipoSuministro list
     */
    function selectTipoSuministro($id = "") {
        $query = "SELECT * FROM tipoSuministro";
        if ($id) {
            $query .= " where idTipoSuministro = '$id'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new TipoSuministro($row['idTipoSuministro'], $row['nombreTipoSuministro'],
            $row['descripcionTipoSuministro'], $row['idCategoria'],$row['idUnidades'], 
            $row['marcaTipoSuministro'],$row['existenciaMinima']);
        }
        return $rows;
    }
    
    /**
     * Get Categoria de Tipo de suministro from DB
     * @param int $idCategoria
     * @return CategoriaSuministro list
     */
    function selectCategoriaTipoSuministro($myCategoriaId = 0) {
        $query = "SELECT * FROM categoriaSuministro";
        if ($myCategoriaId) {
            $query .= " where idCategoria = '$myCategoriaId'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rowsCat = [];
        foreach ($result->fetchAll() as $rowCat) {
            $rowsCat[] = new CategoriaSuministro($rowCat['idCategoria'], $rowCat['descripcionCategoria']);
        }
        return $rowsCat;
    }
    
    /**
     * Get UnidadesSuministro de Tipo de Suministro from DB
     * @param int $idUnidades
     * @return UnidadesSuministro list
     */
    function selectUnidadesTipoSuministro($myUnidadesId = 0) {
        $query = "SELECT * FROM unidadesSuministro";
        if ($myUnidadesId) {
            $query .= " where idCategoria = '$myUnidadesId'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rowsUnidades = [];
        foreach ($result->fetchAll() as $rowUnidades) {
            $rowsUnidades[] = new CategoriaSuministro($rowUnidades['idUnidades'], $rowUnidades['cantidad']);
        }
        return $rowsUnidades;
    }      
    
    /**
     * Update tipoSuministro information
     * @return result of update
     */
    function updateTipoSuministro(){
        $query = "UPDATE tipoSuministro "
                . "SET nombreTipoSuministro='{$this->nombreTipoSuministro},'"
                . "descripcionTipoSuministro='{$this->descripcionTipoSuministro}', idCategoria='{$this->idCategoria},"
                . "idUnidades='{$this->idUnidades}', marcaTipoSuministro='{$this->marcaTipoSuministro}, existenciaMinima='{$this->existenciaMinima},"
                . " where idTipoSuministro='{$this->idTipoSuministro}'";
        $pdo = new Connection();
        $results = $pdo->open()->query($query);
        return $results->execute();
    }
    
    /**
     * Deletes an tipo de suministro
     * @param int $idTipoSuministro
     * @return result of deletion
     */
    function deleteTipoSuministro($idTipo){
        $pdo = new Connection();
        //delete tipo de suministro with idTipoSuministro = $idTipo from tipoSuministro table
        $queryDelete = "DELETE FROM tipoSuministro WHERE idTipoSuministro = '{$idTipo}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}