<?php

/**
 * Description of usuario
 *
 * @author admin
 */
include "Model/Connection.php";
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

  public function __construct(
    $pidTecnico = "",
    $pprimerNombre = "",
    $psegundoNombre = "",
    $pprimerApellido = "",
    $psegundoApellido = "",
    $ptelefono = "",
    $pcorreoElectronico = "",
    $pdireccion = "",
    $pfechaInclusion = ""
  ) {
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

  public function create_tecnico()
  {
    try {
      $sql = "INSERT INTO tecnico (idTecnico, primerNombre, segundoNombre, primerApellido, segundoApellido, telefono, 
      correoElectronico, direccion,fechaInclusion) "
        . "VALUES ('$this->idTecnico', '$this->primerNombre','$this->segundoNombre', '$this->primerApellido', '$this->segundoApellido', 
        '$this->telefono', '$this->correoElectronico', '$this->direccion', '$this->fechaInclusion')";
      $pdo = new connection();
      $pdo = $pdo->connect();
      return $pdo->query($sql);
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
    return false;
  }
  public function read_tecnicos($idTecnico = 0)
  {
    $rows = []; 
    try {
      $sql = "SELECT * FROM tecnico";

      if ($idTecnico) {
        $sql .= " WHERE idTecnico='$idTecnico'";
      }
      $pdo = new connection();
      $pdo = $pdo->connect();
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
  public function delete_tecnicos($idTecnico = 0)
  {
    $idTecnico =  ($idTecnico) ? $idTecnico : $this->idTecnico;
    $sql = "DELETE FROM tecnico WHERE idTecnico = '$idTecnico'";
    echo $sql;
    $pdo = new connection();
    $pdo = $pdo->connect();
    return $pdo->query($sql);
  }

  public function update_tecnicos()
  {
    $sql = "UPDATE tecnico SET primerNombre = '$this->primerNombre', segundoNombre = '$this->segundoNombre',"
      . " primerApellido='$this->primerApellido', segundoApellido='$this->segundoApellido', password='$this->password'"
      . " telefono='$this->telefono', correoElectronico='$this->correoElectronico', direccion='$this->direccion'"
      . " fechaInclusion='$this->fechaInclusion' WHERE idTecnico='$this->idTecnico'";
    echo $sql;
    $pdo = new connection();
    $pdo = $pdo->connect();
    return $pdo->query($sql);
  }
  public function get_attribute_tecnico($primerNombre)
  {
    try {
      return $this->$primerNombre;
    } catch (Exception $ex) {
      return NULL;
    }
  }
}
