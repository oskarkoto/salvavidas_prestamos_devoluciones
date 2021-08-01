<!--Modelo de Tecnicos.-->
<?php
include_once "Model/Connection.php";

class TipoEquipo
{
  public $idTipoEquipo;
  public $nombreTipoEquipo;
  public $descripcionTipoEquipo;
  public $marcaTipoEquipo;
  public $existenciaMinima;

  public function __construct(
    $pidTipoEquipo = "",
    $pnombreTipoEquipo = "",
    $pdescripcionTipoEquipo = "",
    $pmarcaTipoEquipo = "",
    $pexistenciaMinima = ""
  ) {
    $this->idTipoEquipo = $pidTipoEquipo;
    $this->nombreTipoEquipo = $pnombreTipoEquipo;
    $this->descripcionTipoEquipo = $pdescripcionTipoEquipo;
    $this->marcaTipoEquipo = $pmarcaTipoEquipo;
    $this->existenciaMinima = $pexistenciaMinima;
  }

  public function create_tipo_equipo()
  {
    try {
      $sql = "INSERT INTO tipoequipo (idTipoEquipo, nombreTipoEquipo, descripcionTipoEquipo, marcaTipoEquipo, existenciaMinima) "
        . "VALUES ('$this->idTipoEquipo', '$this->nombreTipoEquipo','$this->descripcionTipoEquipo', '$this->marcaTipoEquipo', 
        '$this->existenciaMinima')";
      $pdo = new connection();
      $pdo = $pdo->open();
      return $pdo->query($sql);
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
    return false;
  }

  public function read_tipo_equipo($idTipoEquipo = 0)
  {
    $rows = []; 
    try {
      $sql = "SELECT * FROM tipoequipo";

      if ($idTipoEquipo) {
        $sql .= " WHERE idTipoEquipo='$idTipoEquipo'";
      }
      $pdo = new connection();
      $pdo = $pdo->open();
      $result = $pdo->query($sql);

      foreach ($result->fetchAll() as $value) {
        $rows[] = new TipoEquipo(
        $value['idTipoEquipo'],
        $value['nombreTipoEquipo'],
        $value['descripcionTipoEquipo'],
        $value['marcaTipoEquipo'],
        $value['existenciaMinima']);
      }
    } catch (Exception $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }
    return $rows;
  }

  function seleccionarAllTipoEquipo(){
    $query = "SELECT * FROM tipoequipo";
    $pdo = new Connection();
    $pdo = $pdo->open();
    $result = $pdo->query($query);
    $rows = [];
    foreach ($result->fetchAll() as $row) {
        $rows[] = new TipoEquipo($row['idTipoEquipo'], $row['nombreTipoEquipo'],$row['descripcionTipoEquipo'],$row['marcaTipoEquipo'],$row['existenciaMinima']);
    }
    return $rows;
  }

  public function delete_tipo_equipo($idTipoEquipo = 0)
  {
    $idTipoEquipo =  ($idTipoEquipo) ? $idTipoEquipo : $this->idTipoEquipo;
    $sql = "DELETE FROM tipoequipo WHERE idTipoEquipo = '$idTipoEquipo'";
    $pdo = new connection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }

  public function update_tipo_equipo()
  {
    $sql = "UPDATE tipoequipo SET idTipoEquipo = '$this->idTipoEquipo', nombreTipoEquipo = '$this->nombreTipoEquipo',"
      . " descripcionTipoEquipo='$this->descripcionTipoEquipo', marcaTipoEquipo='$this->marcaTipoEquipo',"
      . " existenciaMinima='$this->existenciaMinima' WHERE idTipoEquipo='$this->idTipoEquipo'";
    echo $sql;
    $pdo = new connection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }
  
  public function get_attribute_equipo($idTipoEquipo)
  {
    try {
      return $this->$idTipoEquipo;
    } catch (Exception $ex) {
      return NULL;
    }
  }
}
