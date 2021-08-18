<!--Modelo de Suministro.-->
<?php
include_once "model/Connection.php";
include_once "model/TipoSuministro.php";
include_once "model/CondicionActual.php";
include_once "model/EstadoInventario.php";
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
    public function __construct($idSuministro = "", $idTipoSuministro = "", $idCondicionActual = 0, $idEstadoInventario = 0, $fechaInclusion = "") {
        $this->idSuministro = $idSuministro;
        $this->idTipoSuministro = $idTipoSuministro;
        $this->idCondicionActual = $idCondicionActual;
        $this->idEstadoInventario = $idEstadoInventario;
        $this->fechaInclusion = $fechaInclusion;
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
    function selectSuministro($idSuministro = "") {
        $query = "SELECT * FROM suministro";
        if ($idSuministro) {
            $query .= " where idSuministro = '$idSuministro'";
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
     * Get TipoSuministro de Suministro from DB
     * @param int $idCategoria
     * @return CategoriaSuministro list
     */
    function selectTipoSuministroSuministro($myTipoSuministroId = "") {
        $query = "SELECT * FROM tipoSuministro";
        if ($myTipoSuministroId) {
            $query .= " where idTipoSuministroId = '$myTipoSuministroId'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rowsTS = [];
        foreach ($result->fetchAll() as $rowTS) {
            $rowsTS[] = new TipoSuministro($rowTS['idTipoSuministro'], $rowTS['nombreTipoSuministro'],
                $rowTS['descripcionTipoSuministro'], $rowTS['idCategoria'],$rowTS['idUnidades'], 
                $rowTS['marcaTipoSuministro'],$rowTS['existenciaMinima']);
        }
        return $rowsTS;
    }
    
    /**
     * Update Suministro information
     * @return result of update
     */
    function updateSuministro(){
        $sql = "UPDATE suministro SET idTipoSuministro = '{$this->idTipoSuministro}', idCondicionActual='{$this->idCondicionActual}', idEstadoInventario='{$this->idEstadoInventario}', fechaInclusion='{$this->fechaInclusion}' where idSuministro='{$this->idSuministro}'";
        $pdo = new Connection();
        $result = $pdo->open()->query($sql);
        return $result;
    }
    
        /**
     * Update Suministro information
     * @return result of update
     */
    function updateSuministroCondicion(){
        $sql = "UPDATE suministro SET idCondicionActual='{$this->idCondicionActual}' where idSuministro='{$this->idSuministro}'";
        $pdo = new Connection();
        $result = $pdo->open()->query($sql);
        return $result;
    }
    /**
     * Deletes an suministro
     * @param int $idSuministro
     * @return result of deletion
     */
    function deleteSuministro($idSuministro = 0){
        //delete suministro with idSuministro = $idSuministro from suministro table
        $queryDelete = "DELETE FROM suministro WHERE idSuministro = '{$idSuministro}'";       
        $pdo = new Connection(); 
        $pdo = $pdo->open();
        return $pdo->query($queryDelete);
    }
}
