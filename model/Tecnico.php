<!--Modelo de Tecnicos.-->
<?php
include_once "Model/Connection.php";

class Tecnico
{
  public $idTecnico;
  public $primerNombre;
  public $segundoNombre;
  public $primerApellido;
  public $segundoApellido;
  public $telefono;
  public $correoElectronico;
  public $direccion;
  public $fechaInclusion;

  public function __construct($pidTecnico = "", $pprimerNombre = "", $psegundoNombre = "", $pprimerApellido = "", $psegundoApellido = "", $ptelefono = "", $pcorreoElectronico = "", $pdireccion = "", $pfechaInclusion = "") {
    $this->idTecnico = $pidTecnico;
    $this->primerNombre = $pprimerNombre;
    $this->segundoNombre = $psegundoNombre;
    $this->primerApellido = $pprimerApellido;
    $this->segundoApellido = $psegundoApellido;
    $this->telefono = $ptelefono;
    $this->correoElectronico = $pcorreoElectronico;
    $this->direccion = $pdireccion;
    $this->fechaInclusion = $pfechaInclusion;
  }

  function create_tecnico()
  {
    try {
      $sql = "INSERT INTO tecnico (idTecnico, primerNombre, segundoNombre, primerApellido, segundoApellido, telefono, 
      correoElectronico, direccion,fechaInclusion) "
        . "VALUES ('$this->idTecnico', '$this->primerNombre','$this->segundoNombre', '$this->primerApellido', '$this->segundoApellido', 
        '$this->telefono', '$this->correoElectronico', '$this->direccion', '$this->fechaInclusion')";
      $pdo = new connection();
      $pdo = $pdo->open();
      return $pdo->query($sql);
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
    return false;
  }

  function seleccionarAllTecnico() {
    $query = "SELECT * FROM tecnico";
    $pdo = new Connection();
    $pdo = $pdo->open();
    $result = $pdo->query($query);
    $rows = [];
    foreach ($result->fetchAll() as $row) {
        $rows[] = new Tecnico($row['idTecnico'], $row['primerNombre'],$row['segundoNombre'],$row['primerApellido'],$row['segundoApellido'],$row['telefono'],$row['correoElectronico'],$row['direccion'],$row['fechaInclusion']);
    }
    return $rows;
}      

  function read_tecnicos($idTecnico = 0)
  {
    $rows = []; 
    try {
      $sql = "SELECT * FROM tecnico";

      if ($idTecnico) {
        $sql .= " WHERE idTecnico='$idTecnico'";
      }
      $pdo = new connection();
      $pdo = $pdo->open();
      $result = $pdo->query($sql);

      foreach ($result->fetchAll() as $value) {
        $rows[] = new Tecnico(
        $value['idTecnico'],
        $value['primerNombre'],
        $value['segundoNombre'],
        $value['primerApellido'],
        $value['segundoApellido'],
        $value['telefono'],
        $value['correoElectronico'],
        $value['direccion'],
        $value['fechaInclusion']);
      }
    } catch (Exception $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }
    return $rows;
  }

  function delete_tecnicos($idTecnico = 0)
  {
    $idTecnico =  ($idTecnico) ? $idTecnico : $this->idTecnico;
    $sql = "DELETE FROM tecnico WHERE idTecnico = '$idTecnico'";
    $pdo = new connection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }

  function update_tecnicos()
  {
    $sql = "UPDATE tecnico SET primerNombre = '{$this->primerNombre}', segundoNombre = '{$this->segundoNombre}', primerApellido='{$this->primerApellido}', segundoApellido='{$this->segundoApellido}', telefono='{$this->telefono}', correoElectronico='{$this->correoElectronico}', direccion='{$this->direccion}', fechaInclusion='{$this->fechaInclusion}' WHERE idTecnico='{$this->idTecnico}'";
    $pdo = new Connection();
    $result = $pdo->open()->query($sql);
    return $result;
  }

  function get_attribute_tecnico($primerNombre)
  {
    try {
      return $this->$primerNombre;
    } catch (Exception $ex) {
      return NULL;
    }
  }
}
