<!--Modelo de devolucion.-->
<?php
include_once "model/Connection.php";

class Devolucion {
    
    public $idDevolucion;
    public $idPrestamo;
    public $fechaRealDevolucion;
    public $idEstadoDevolucionGeneral;


    public function __construct($idDevolucion = 0, $idPrestamo = 0,$fechaRealDevolucion = "",$idEstadoDevolucionGeneral= 0) {
        $this->idDevolucion = $idDevolucion;
        $this->idPrestamo = $idPrestamo;
        $this->fechaRealDevolucion = $fechaRealDevolucion;
        $this->fechaRealDevolucion = $idEstadoDevolucionGeneral;
    }

    /**
     * Inserta Devolucion en DB.
    **/
    function insertDevolucion() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO devolucion (idDevolucion, idPrestamo,fechaRealDevolucion,fechaRealDevolucion) VALUES ('{$this->idDevolucion}','{$this->idPrestamo}','{$this->fechaRealDevolucion}','{$this->fechaRealDevolucion}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Retorna las devoluciones disponibles en la base de datos. 
     * Hace una lista de las mismas.
     **/
    function seleccionarAllDevolucion() {
        $query = "SELECT * FROM devolucion";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new Devolucion($row['idDevolucion'], $row['idPrestamo'],$row['fechaRealDevolucion'],$row['fechaRealDevolucion']);
        }
        return $rows;
    }      
    
      
    /**
     * Retorna una devolucion disponible en la base de datos. 
     * Hace una lista de detalles.
     **/
    function seleccionarDevolucion($idDevolucion = 0) {
        $query = "SELECT * FROM devolucion";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new Devolucion($row['idDevolucion'], $row['idPrestamo'],$row['fechaRealDevolucion'],$row['fechaRealDevolucion']);
        }
        return $rows;
    }      
    
    /**
     * Actualiza la información de la devolucion.
     * NO se requiere en el sistema.
     */
    function actualizarDevolucion(){
        //NO se requiere en el sistema.
    }
    
    /**
     * Elimina una devolucion de la base de datos.
     * NO se requiere en el sistema.
     */
    function eliminarDevolucion($idDevolucion){
        $pdo = new Connection();
        $queryDelete = "DELETE FROM devolucion WHERE idDevolucion = '{$idDevolucion}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}