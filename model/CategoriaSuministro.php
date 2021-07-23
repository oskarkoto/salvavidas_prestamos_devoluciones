<?php

include_once "model/Connection.php";

/**
 * Manage Categoria de Suministro
 */
class CategoriaSuministro {

    public $idCategoria;
    public $descripcionCategoria;
    
    /**
     * Initial values
     * @param int $idCategoria
     * @param string $descripcionCategoria
     */
    public function __construct($id = 0, $descripcion = "") {
        $this->idCategoria = $id;
        $this->descripcionCategoria = $descripcion;
    }

    /**
     * Insert Categoria de Suministro in DB
     * @return boolean
     */
    function insertCategoriaSuministro() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO categoriaSuministro (idCategoria, descripcionCantegoria) VALUES ('{$this->idCategoria}','{$this->descripcionCategoria}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Get all categorias de suministro from DB
     * @param int $idCategoria
     * @return CategoriaSuministro list
     */
    function selectAllCategoriaSuministro() {
        $query = "SELECT * FROM categoriaSuministro";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new UnidadesSuministro($row['idCategoria'], $row['descripcionCategoria']);
        }
        return $rows;
    }      
    
      
    /**
     * Get categorias de suministro from DB
     * @param int $idCategoria
     * @return CategoriaSuministro list
     */
    function selectCategoriaSuministro($id = 0) {
        $query = "SELECT * FROM categoriaSuministro";
        if ($id) {
            $query .= " where idCategoria = '$id'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new UnidadesSuministro($row['idCategoria'], $row['descripcionCategoria']);
        }
        return $rows;
    }      
    
    /**
     * Update categoriaSuministro information
     * @return result of update
     */
    function updateCategoriaSuministro(){
        $query = "UPDATE categoriaSuministro "
                . "SET descripcionCategoria='{$this->descripcionCategoria}'" 
                . "where idCategoria='{$this->idCategoria}'";
        $pdo = new Connection();
        $results = $pdo->open()->query($query);
        return $results->execute();
    }
    
    /**
     * Deletes an categoria de suministro
     * @param int $idCategoria
     * @return result of deletion
     */
    function deleteCategoriaSuministro($idCategoria){
        $pdo = new Connection();
        //delete categoria de suministro with idCategoria = $idCategoria from categoriaSuministro table
        $queryDelete = "DELETE FROM categoriaSuministro WHERE idCategoria = '{$idCategoria}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}