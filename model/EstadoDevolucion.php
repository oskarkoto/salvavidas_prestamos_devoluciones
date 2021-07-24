<!--Modelo de estado de devolucion.-->
<?php
include_once "model/Connection.php";

class EstadoDevolucion {
    
    public $idEstadoDevolucion;
    public $descripcionEstadoDevolucion;

    public function __construct($idEstadoDevolucion = 0, $descripcionEstadoDevolucion = "") {
        $this->idEstadoDevolucion = $idEstadoDevolucion;
        $this->descripcionEstadoDevolucion = $descripcionEstadoDevolucion;
    }

    /**
     * Inserta Estado de Devolucion en DB.
    **/
    function insertEstadoDevolucion() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO estadodevolucion (idEstadoDevolucion, descripcionEstadoDevolucion) VALUES ('{$this->idEstadoDevolucion}','{$this->descripcionEstadoDevolucion}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Retorna los estados de devolucion disponibles en la base de datos. 
     * Hace una lista de las mismas.
     **/
    function seleccionarAllEstadoDevolucion() {
        $query = "SELECT * FROM estadodevolucion";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new EstadoDevolucion($row['idEstadoDevolucion'], $row['descripcionEstadoDevolucion']);
        }
        return $rows;
    }      
        
    /**
     * Retorna un estado de devolucion disponible en la base de datos. 
     * Hace una lista de detalles.
     **/
    function seleccionarEstadoDevolucion($idEstadoDevolucion = 0) {
        $query = "SELECT * FROM estadodevolucion";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new EstadoDevolucion($row['idEstadoDevolucion'], $row['descripcionEstadoDevolucion']);
        }
        return $rows;
    }      
    
    /**
     * Actualiza la información del estado de devolucion.
     * NO se requiere en el sistema.
     */
    function actualizarEstadoDevolucion(){
        //NO se requiere en el sistema.
    }
    
    /**
     * Elimina un estado de devolucion de la base de datos.
     * NO se requiere en el sistema.
     */
    function eliminarEstadoDevolucion($idEstadoDevolucion){
        $pdo = new Connection();
        $queryDelete = "DELETE FROM estadodevolucion WHERE idEstadoDevolucion = '{$idEstadoDevolucion}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}