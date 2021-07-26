<!--Modelo de reporte.-->
<?php
include_once "model/Connection.php";

class Reporte {
    
    public $idReporte;
    public $tituloReporte;
    public $idTipoReporte;
    public $fechaReporte;

    public function __construct($idReporte = 0, $tituloReporte = "",$idTipoReporte = 0,$fechaReporte= "") {
        $this->idReporte = $idReporte;
        $this->tituloReporte = $tituloReporte;
        $this->idTipoReporte = $idTipoReporte;
        $this->fechaReporte = $fechaReporte;
    }

    /**
     * Inserta Reporte en DB.
    **/
    function insertReporte() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO reporte (idReporte, tituloReporte,idTipoReporte,fechaReporte) VALUES ('{$this->idReporte}','{$this->tituloReporte}','{$this->idTipoReporte}','{$this->fechaReporte}')";
        $result = $pdo->prepare($query);
        return $result->execute();
    }

    /**
     * Retorna los reportes disponibles en la base de datos. 
     * Hace una lista de los mismos.
     **/
    function seleccionarAllReporte() {
        $query = "SELECT * FROM reporte";
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new Reporte($row['idReporte'], $row['tituloReporte'],$row['idTipoReporte'],$row['fechaReporte']);
        }
        return $rows;
    }         
    
    /**
     * Actualiza la información del reporte.
     * NO se requiere en el sistema.
     */
    function actualizarReporte(){
        //NO se requiere en el sistema.
    }
    
    /**
     * Elimina un reporte de la base de datos.
     * NO se requiere en el sistema.
     */
    function eliminarReporte($idReporte){
        $pdo = new Connection();
        $queryDelete = "DELETE FROM reporte WHERE idReporte = '{$idReporte}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}