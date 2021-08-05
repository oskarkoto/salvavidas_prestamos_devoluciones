<!--Modelo de prestamo de equipo. -->
<?php
include_once "model/Connection.php";
include_once "model/Prestamo.php";

class PrestamoEquipo {
    
    public $idPrestamoEquipo;
    public $idPrestamo;
    public $idEquipo;
    public $idEstadoDevolucion;


    public function __construct($idPrestamoEquipo = 0, $idPrestamo = 0,$idEquipo = 0,$idEstadoDevolucion= 0) {
        $this->idPrestamoEquipo = $idPrestamo;
        $this->idPrestamo = $idPrestamo;
        $this->idEquipo = $idEquipo;
        $this->idEstadoDevolucion = $idEstadoDevolucion;
    }

    /**
     * Inserta Prestamo de Equipo en DB.

    **/
    function insertPrestamoEquipo() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO prestamoequipo (idPrestamoEquipo, idPrestamo,idEquipo,idEstadoDevolucion) VALUES ('{$this->idPrestamoEquipo}','{$this->idPrestamo}','{$this->idEquipo}','{$this->idEstadoDevolucion}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Retorna los prestamos de equipo disponibles en la base de datos. 
     * Hace una lista de los mismos.
     **/
    function seleccionarAllPrestamoEquipo() {
        $query = "SELECT * FROM prestamoequipo";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new PrestamoEquipo($row['idPrestamoEquipo'], $row['idPrestamo'],$row['idEquipo'],$row['idEstadoDevolucion']);
        }
        return $rows;
    }      
    
      
    /**
     * Retorna un prestamo de equipo disponible en la base de datos. 
     * Hace una lista de detalles.
     **/
    function seleccionarPrestamoEquipo($idPrestamoEquipo = 0) {
        $query = "SELECT * FROM prestamoequipo";
        if ($idPrestamoEquipo) {
            $query .= " where idPrestamoEquipo = '$idPrestamoEquipo'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new PrestamoEquipo($row['idPrestamoEquipo'], $row['idPrestamo'],
            $row['idEquipo'],$row['idEstadoDevolucion']);
        }
        return $rows;
    }      
    
    /**
     * Actualiza la información del prestamo de equipo.
     * NO se requiere en el sistema.
     */
    function actualizarPrestamoEquipo(){
        //NO se requiere en el sistema.
    }
    
    /**
     * Elimina un prestamo de equipo de la base de datos.
     * NO se requiere en el sistema.
     */
    function eliminarPrestamoEquipo($idPrestamoEquipo){
        $pdo = new Connection();
        $queryDelete = "DELETE FROM prestamoequipo WHERE idPrestamoEquipo = '{$idPrestamoEquipo}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}