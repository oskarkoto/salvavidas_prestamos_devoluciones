<!--Modelo de reporte.-->
<?php
include_once "model/Connection.php";
include_once "model/TipoReporte.php";
include_once "model/ReporteTipo1.php";
include_once "model/ReporteTipo2.php";
include_once "model/ReporteTipo3.php";
include_once "model/ReporteTipo45.php";
include_once "model/ReporteTipo6.php";

class Reporte {
    
    public $idReporte;
    public $tituloReporte;
    public $idTipoReporte;
    public $fechaReporte;

    public function __construct( $tituloReporte = "",$idTipoReporte = 0,$fechaReporte= "", $idReporte = 0) {
        $this->tituloReporte = $tituloReporte;
        $this->idTipoReporte = $idTipoReporte;
        $this->fechaReporte = $fechaReporte;
        $this->idReporte = $idReporte;
    }

    /**
     * Inserta Reporte en DB.
    **/
    function insertReporte() {
        $pdo = new Connection();
        $pdo = $pdo->open();
        $query = "INSERT INTO reporte (tituloReporte,idTipoReporte,fechaReporte) VALUES ('{$this->tituloReporte}','{$this->idTipoReporte}','{$this->fechaReporte}')";
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
            $rows[] = new Reporte($row['tituloReporte'],$row['idTipoReporte'],$row['fechaReporte'],$row['idReporte']);
        }
        return $rows;
    }         
    

    /**
     * Retorna el reporte especifico en la base de datos. 
     * @param string $idReporte
     **/
    function seleccionarReporte($idReporte = "") {
        $query = "SELECT * FROM reporte";
        if ($idReporte) {
            $query .= " where idReporte = '$idReporte'";
        }
        $pdo = new Connection();
        $pdo = $pdo->open();
        $result = $pdo->query($query);
        $rows = [];
        foreach ($result->fetchAll() as $row) {
            $rows[] = new Reporte($row['tituloReporte'],$row['idTipoReporte'],$row['fechaReporte'],$row['idReporte']);
        }
        return $rows; 
    }   
    
    /**
     * Retorna el reporte especifico en la base de datos. 
     * @param string $idReporte
     **/
    function generarReporte($idTipoReporte = 0) {
        switch ($idTipoReporte)
        {
            case 1:
                $query = "SELECT e.idEquipo, t.nombreTipoEquipo, c.descripcionCondicionActual, i.descripcionEstadoInventario, e.fechaInclusion
                    FROM equipo e 
                    INNER JOIN tipoequipo t ON e.idTipoEquipo = t.idTipoEquipo
                    INNER JOIN condicionactual c ON e.idCondicionActual = c.idCondicionActual
                    INNER JOIN estadoinventario i ON e.idEstadoInventario = i.idEstadoInventario
                    WHERE e.idCondicionActual=2";    
                $pdo = new Connection();
                $pdo = $pdo->open();
                $result = $pdo->query($query);
                $rows = [];
                foreach ($result->fetchAll() as $row) {
                    $rows[] = new ReporteTipo1($row['idEquipo'],$row['nombreTipoEquipo'],$row['descripcionCondicionActual'],
                    $row['descripcionEstadoInventario'],$row['fechaInclusion'],);
                }
                return $rows; 
                break;
            case 2:
                $query = "SELECT s.idSuministro, t.nombreTipoSuministro, c.descripcionCondicionActual, i.descripcionEstadoInventario, s.fechaInclusion
                    FROM suministro s
                    INNER JOIN tiposuministro t ON s.idTipoSuministro = t.idTipoSuministro
                    INNER JOIN condicionactual c ON s.idCondicionActual = c.idCondicionActual
                    INNER JOIN estadoinventario i ON s.idEstadoInventario = i.idEstadoInventario
                    WHERE s.idcondicionactual=2";
                $pdo = new Connection();
                $pdo = $pdo->open();
                $result = $pdo->query($query);
                $rows = [];
                foreach ($result->fetchAll() as $row) {
                    $rows[] = new ReporteTipo2($row['idSuministro'],$row['nombreTipoSuministro'],$row['descripcionCondicionActual'],
                    $row['descripcionEstadoInventario'],$row['fechaInclusion'],);
                }
                return $rows; 
                break;
            case 3:
                $query = "SELECT prestamo.idPrestamo, idTecnico, fechaPrestamo, fechaEsperadaDevolucion, cliente 
                    FROM prestamo 
                    INNER JOIN devolucion ON prestamo.idPrestamo=devolucion.idPrestamo 
                    WHERE CURDATE() > fechaEsperadaDevolucion";
                $pdo = new Connection();
                $pdo = $pdo->open();
                $result = $pdo->query($query);
                $rows = [];
                foreach ($result->fetchAll() as $row) {
                    $rows[] = new ReporteTipo3($row['idPrestamo'],$row['idTecnico'],$row['fechaPrestamo'],
                    $row['fechaEsperadaDevolucion'],$row['cliente'],);
                }
                return $rows; 
                break;
            case 4:
                $query = "SELECT devolucion.idPrestamo, tecnico.idTecnico, tecnico.primerNombre, tecnico.segundoNombre, tecnico.primerApellido, tecnico.segundoApellido, tecnico.telefono, tecnico.correoElectronico 
                    FROM tecnico 
                    INNER JOIN prestamo ON tecnico.idTecnico = prestamo.idTecnico 
                    INNER JOIN devolucion ON prestamo.idPrestamo = devolucion.idPrestamo
                    WHERE devolucion.idEstadoDevolucionGeneral = 2";
                $pdo = new Connection();
                $pdo = $pdo->open();
                $result = $pdo->query($query);
                $rows = [];
                foreach ($result->fetchAll() as $row) {
                    $rows[] = new ReporteTipo45($row['idPrestamo'],$row['idTecnico'],$row['primerNombre'],
                    $row['segundoNombre'],$row['primerApellido'],$row['segundoApellido'],$row['telefono'],
                    $row['correoElectronico']);
                }
                return $rows; 
                break;
            case 5:
                $query = "SELECT devolucion.idPrestamo, tecnico.idTecnico, tecnico.primerNombre, tecnico.segundoNombre, tecnico.primerApellido, tecnico.segundoApellido, tecnico.telefono, tecnico.correoElectronico 
                    FROM tecnico 
                    INNER JOIN prestamo ON tecnico.idTecnico = prestamo.idTecnico 
                    INNER JOIN devolucion ON prestamo.idPrestamo = devolucion.idPrestamo
                    WHERE devolucion.idEstadoDevolucionGeneral = 4";
                $pdo = new Connection();
                $pdo = $pdo->open();
                $result = $pdo->query($query);
                $rows = [];
                foreach ($result->fetchAll() as $row) {
                    $rows[] = new ReporteTipo45($row['idPrestamo'],$row['idTecnico'],$row['primerNombre'],
                    $row['segundoNombre'],$row['primerApellido'],$row['segundoApellido'],$row['telefono'],
                    $row['correoElectronico']);
                }
                return $rows; 
                break;
            case 6:
                $query = "SELECT t.idTipoEquipo, t.nombreTipoEquipo, t.descripcionTipoEquipo, t.marcaTipoEquipo, t.existenciaMinima, (SELECT COUNT(*) FROM equipo e WHERE e.idTipoEquipo = t.idTipoEquipo) as existenciaActual
                    FROM tipoequipo t 
                    INNER JOIN equipo e ON e.idTipoEquipo = t.idTipoEquipo 
                    WHERE t.existenciaMinima > (SELECT COUNT(*) FROM equipo e WHERE e.idTipoEquipo = t.idTipoEquipo)";
                $pdo = new Connection();
                $pdo = $pdo->open();
                $result = $pdo->query($query);
                $rows = [];
                foreach ($result->fetchAll() as $row) {
                    $rows[] = new ReporteTipo6($row['idTipoEquipo'],$row['nombreTipoEquipo'],$row['descripcionTipoEquipo'],
                    $row['marcaTipoEquipo'],$row['existenciaMinima'],$row['existenciaActual']);
                }
                return $rows; 
                break;
        }        
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
    function eliminarReporte($idReporte = 0){
        $pdo = new Connection();
        $queryDelete = "DELETE FROM reporte WHERE idReporte = '{$idReporte}'";        
        $resultDel = $pdo->open()->query($queryDelete);
        return $resultDel->execute();
    }
}