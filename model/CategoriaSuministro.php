<!--Modelo de Categoria de Suministro.-->
<?php

include_once "model/Connection.php";

class CategoriaSuministro {

    public $idCategoria;
    public $descripcionCategoria;

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
        $query = "INSERT INTO categoriasuministro (idCategoria, descripcionCantegoria) VALUES ('{$this->idCategoria}','{$this->descripcionCategoria}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Get all categorias de suministro from DB
     * @param int $idCategoria
     * @return CategoriaSuministro list
     */
    function selectAllCategoriaSuministro() {
        $query = "SELECT * FROM categoriasuministro";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new CategoriaSuministro($row['idCategoria'], $row['descripcionCategoria']);
        }
        return $rows;
    }      
    
      
    /**
     * Get categorias de suministro from DB
     * @param int $idCategoria
     * @return CategoriaSuministro list
     */
    function selectCategoriaSuministro($id = 0) {
        $query = "SELECT * FROM categoriasuministro";
        if ($id) {
            $query .= " where idCategoria = '$id'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new CategoriaSuministro($row['idCategoria'], $row['descripcionCategoria']);
        }
        return $rows;
    }      
    
    /**
     * Update categoriaSuministro information
     * @return result of update
     */
    function updateCategoriaSuministro(){
        $query = "UPDATE categoriasuministro "
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
        $queryDelete = "DELETE FROM categoriasuministro WHERE idCategoria = '{$idCategoria}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }

    /**
     * Last CategoriaSuministro on DB
     * @return CategoriaSuministro list
     */
    function selectLast() {
        $query = "SELECT * FROM categoriasuministro ORDER BY idCategoria DESC LIMIT 1";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new CategoriaSuministro($row['idCategoria'], $row['descripcionCategoria']);
        }
        return $rows;
    }
}