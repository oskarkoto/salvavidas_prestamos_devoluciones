<!--Modelo de Equipo.-->
<?php
include_once "model/Connection.php";
include_once "model/TipoEquipo.php";
include_once "model/CondicionActual.php";
include_once "model/EstadoInventario.php";

class Equipo
{
  public $idEquipo;
  public $idTipoEquipo;
  public $idCondicionActual;
  public $idEstadoInventario;
  public $fechaInclusion;

  public function __construct(
    $pidEquipo = "",
    $pidTipoEquipo = "",
    $pidCondicionActual = "",
    $pidEstadoInventario = "",
    $pfechaInclusion = ""
  ) {
    $this->idEquipo = $pidEquipo;
    $this->idTipoEquipo = $pidTipoEquipo;
    $this->idCondicionActual = $pidCondicionActual;
    $this->idEstadoInventario = $pidEstadoInventario;
    $this->fechaInclusion = $pfechaInclusion;
  }

  public function create_equipo()
  {
    try {
      $sql = "INSERT INTO equipo (idEquipo, idTipoEquipo, idCondicionActual, idEstadoInventario,fechaInclusion) "
        . "VALUES ('$this->idEquipo', '$this->idTipoEquipo','$this->idCondicionActual', '$this->idEstadoInventario', '$this->fechaInclusion')";
      $pdo = new connection();
      $pdo = $pdo->open();
      return $pdo->query($sql);
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
    return false;
  }

  public function read_equipo($idEquipo = 0)
  {
    $rows = []; 
    try {
      $sql = "SELECT * FROM equipo";

      if ($idEquipo) {
        $sql .= " WHERE idEquipo='$idEquipo'";
      }
      $pdo = new connection();
      $pdo = $pdo->open();
      $result = $pdo->query($sql);

      foreach ($result->fetchAll() as $value) {
        $rows[] = new Equipo(
        $value['idEquipo'],
        $value['idTipoEquipo'],
        $value['idCondicionActual'],
        $value['idEstadoInventario'],
        $value['fechaInclusion']);
      }
    } catch (Exception $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }
    return $rows;
  }

  function seleccionarAllEquipo(){
    $query = "SELECT * FROM equipo";
    $pdo = new Connection();
    $pdo = $pdo->open();
    $result = $pdo->query($query);
    $rows = [];
    foreach ($result->fetchAll() as $row) {
        $rows[] = new Equipo($row['idEquipo'], $row['idTipoEquipo'],$row['idCondicionActual'],$row['idEstadoInventario'],$row['fechaInclusion']);
    }
    return $rows;
  }

  public function delete_equipo($idEquipo = 0)
  {
    $idEquipo =  ($idEquipo) ? $idEquipo : $this->idEquipo;
    $sql = "DELETE FROM equipo WHERE idEquipo = '$idEquipo'";
    $pdo = new connection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }

  public function update_equipo()
  {
    $sql = "UPDATE equipo SET idEquipo = '{$this->idEquipo}', idTipoEquipo = '{$this->idTipoEquipo}', idCondicionActual='{$this->idCondicionActual}', idEstadoInventario='{$this->idEstadoInventario}', fechaInclusion='{$this->fechaInclusion}' WHERE idEquipo='{$this->idEquipo}'";
    $pdo = new connection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }

  public function update_equipo_condicion()
  { 
    $sql = "UPDATE equipo SET idCondicionActual='{$this->idCondicionActual}',idEstadoInventario='{$this->idEstadoInventario}' WHERE idEquipo='{$this->idEquipo}'";
    $pdo = new connection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }
  
  public function get_attribute_equipo($idEquipo)
  {
    try {
      return $this->$idEquipo;
    } catch (Exception $ex) {
      return NULL;
    }
  }
}
