<?php
class dbNBA
{
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $db_name = "nba";

  private $conexion;
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno){
          $this->error=true;
      }
  }
  // en esta funcion insertamos los equipos en la base de datos mediante el formulari
  public function insertarEquipo($nombre,$ciudad,$conferencia,$division){
    if (!$this->error) {
      $sqlInsercion="INSERT INTO equipos(nombre,ciudad,conferencia,division) Values('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
      $this->conexion->query($sqlInsercion);
      return $this->conexion->query("SELECT * FROM equipos WHERE nombre='".$nombre."' AND ciudad='".$ciudad."' AND conferencia='".$conferencia."' AND division='".$division."'");
    }
    else{
      return null;
    }
  }
  // con esta funcion queremos que nos muestre el nombre del equipo que pones en nombre index.php
  public function devolverEquipo($nombre){
    if (!$this->error) {
      $resumen=$this->conexion->query("SELECT * FROM equipos  WHERE nombre='".$nombre."'");
      return $resumen;
    }
    else{
      return null;
    }
  }


}



 ?>
