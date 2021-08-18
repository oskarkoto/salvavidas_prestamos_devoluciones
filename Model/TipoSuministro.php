<!--Modelo de Tipo de Suministro.-->
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
    public function __construct($idTipoSuministro = "", $nombre = "", $descripcion = "", $idCategoria = 0, $idUnidades = 0, 
    $marca = "", $existencia = 0) {
        $this->idTipoSuministro = $idTipoSuministro;
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
        $query = "INSERT INTO tiposuministro (idTipoSuministro, nombreTipoSuministro, descripcionTipoSuministro,"
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
        $query = "SELECT * FROM tiposuministro";
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
    function selectTipoSuministro($idTipoSuministro = "") {
        $query = "SELECT * FROM tiposuministro";
        if ($idTipoSuministro) {
            $query .= " where idTipoSuministro = '$idTipoSuministro'";
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
     * Update tipoSuministro information
     * @return result of update
     */
    function updateTipoSuministro(){
        $sql = "UPDATE tiposuministro SET nombreTipoSuministro = '{$this->nombreTipoSuministro}', descripcionTipoSuministro = '{$this->descripcionTipoSuministro}', idCategoria='{$this->idCategoria}', idUnidades='{$this->idUnidades}', marcaTipoSuministro='{$this->marcaTipoSuministro}', existenciaMinima='{$this->existenciaMinima}' WHERE idTipoSuministro ='{$this->idTipoSuministro}'";
        $pdo = new Connection();
        $result = $pdo->open()->query($sql);
        return $result;
    }
    
    /**
     * Deletes an tipo de suministro
     * @param int $idTipoSuministro
     * @return result of deletion
     */
    function deleteTipoSuministro($idTipoSuministro){
        $pdo = new Connection();
        //delete tipo de suministro with idTipoSuministro = $idTipo from tipoSuministro table
        $queryDelete = "DELETE FROM tipoSuministro WHERE idTipoSuministro = '{$idTipoSuministro}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}

