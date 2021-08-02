<?php

include_once "model/Connection.php";

/**
 * Manage Unidades de Suministro
 */
class UnidadesSuministro {

    public $cantidad;
    public $idUnidades;

    /**
     * Initial values
     * @param int $idUnidades
     * @param int $cantidad
     */
    public function __construct($cantidad = 0,$idUnidades = 0) {  
        $this->idUnidades = $idUnidades;
        $this->cantidad = $cantidad;
    }

    /**
     * Insert Unidades de Suministro in DB
     * @return boolean
     */
    function insertUnidadesSuministro() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO unidadesSuministro (cantidad) VALUES ('{$this->cantidad}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }
    
    /**
     * Get all unidades de suministro from DB
     * @param int $idUnidades
     * @return unidadesSuministro list
     */
    function selectAllUnidadesSuministro() {
        $query = "SELECT * FROM unidadesSuministro";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new UnidadesSuministro($row['cantidad'],$row['idUnidades']);
        }
        return $rows;
    }      
      
    /**
     * Get unidades de suministro from DB
     * @param int $idUnidades
     * @return unidadesSuministro list
     */
    function selectUnidadesSuministro($idUnidades = 0) {
        $query = "SELECT * FROM unidadesSuministro";
        if ($idUnidades) {
            $query .= " where idUnidades = '$idUnidades'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new UnidadesSuministro($row['cantidad'],$row['idUnidades']);
        }
        return $rows;
    }      
    
    /**
     * Update unidadesSuministro information
     * @return result of update
     */
    function updateUnidadesSuministro(){
        $query = "UPDATE unidadesSuministro "
                . "SET cantidad='{$this->cantidad}' where idUnidades='{$this->idUnidades}'";
        $pdo = new Connection();
        $results = $pdo->open()->query($query);
        return $results->execute();
    }
    
    /**
     * Deletes an unidades de suministro
     * @param int $idUnidades
     * @return result of deletion
     */
    function deleteUnidadesSuministro($idUnidades =""){
        $pdo = new Connection();
        //delete unidades de suministro with idUnidades = $idUnidades from unidadesSuministro table
        $queryDelete = "DELETE FROM unidadesSuministro WHERE idUnidades = '{$idUnidades}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }

    /**
     * Last UnidadesSuministro on DB
     * @return UnidadesSuministro list
     */
    function selectLast() {
        $query = "SELECT * FROM unidadesSuministro ORDER BY idUnidades DESC LIMIT 1";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new UnidadesSuministro($row['cantidad'], $row['idUnidades']);
        }
        return $rows;
    }
}