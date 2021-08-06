<!--Modelo de prestamo de suministro.-->
<?php
include_once "model/Connection.php";
include_once "model/Prestamo.php";
include_once "model/Suministro.php";
include_once "model/TipoSuministro.php";
include_once "model/EstadoDevolucion.php";

class PrestamoSuministro {
    
    public $idPrestamoSuministro;
    public $idPrestamo;
    public $idSuministro;
    public $idEstadoDevolucion;


    public function __construct($idPrestamoSuministro = 0, $idPrestamo = 0,$idSuministro = 0,$idEstadoDevolucion= 0) {
        $this->idPrestamoSuministro = $idPrestamoSuministro;
        $this->idPrestamo = $idPrestamo;
        $this->idSuministro = $idSuministro;
        $this->idEstadoDevolucion = $idEstadoDevolucion;
    }

    /**
     * Inserta Prestamo de Suministro en DB.
    **/
    function insertPrestamoSuministro() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO prestamosuministro (idPrestamoSuministro, idPrestamo,idSuministro,idEstadoDevolucion) VALUES ('{$this->idPrestamoSuministro}','{$this->idPrestamo}','{$this->idSuministro}','{$this->idEstadoDevolucion}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Retorna los prestamos de suministro disponibles en la base de datos. 
     * Hace una lista de los mismos.
     **/
    function seleccionarAllPrestamoSuministro() {
        $query = "SELECT * FROM prestamosuministro";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new PrestamoSuministro($row['idPrestamoSuministro'], $row['idPrestamo'],$row['idSuministro'],$row['idEstadoDevolucion']);
        }
        return $rows;
    }      
    
      
    /**
     * Retorna un prestamo de suministro disponible en la base de datos. 
     * Hace una lista de detalles.
     **/
    function seleccionarPrestamoSuministro($idPrestamoSuministro = 0) {
        $query = "SELECT * FROM prestamosuministro";
        if ($idPrestamoSuministro) {
            $query .= " where idPrestamoSuministro = '$idPrestamoSuministro'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new PrestamoSuministro($row['idPrestamoSuministro'], $row['idPrestamo'],
            $row['idSuministro'],$row['idEstadoDevolucion']);
        }
        return $rows;
    }      
    
    /**
     * Actualiza la información del prestamo de suministro.
     * NO se requiere en el sistema.
     */
    function actualizarPrestamoSuministro(){
        //NO se requiere en el sistema.
    }
    
    /**
     * Elimina un prestamo de suministro de la base de datos.
     * NO se requiere en el sistema.
     */
    function eliminarPrestamoSuministro($idPrestamoSuministro){
        $pdo = new Connection();
        $queryDelete = "DELETE FROM prestamosuministro WHERE idPrestamoSuministro = '{$idPrestamoSuministro}'";        
        $pdo = $pdo->open();
        return $pdo->query($queryDelete);
    }
}