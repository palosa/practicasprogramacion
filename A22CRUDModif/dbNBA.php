<?php
class dbNBA
{
  private $host = "localhost";
  private $user = "root";
  private $pass = "root";
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
  public function actualizarEquipo($nombre,$ciudad,$conferencia,$division){
    if (!$this->error) {
      $update="UPDATE equipos SET Nombre='".$nombre."',Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."'";
      $this->conexion->query($update);
      return $this->conexion->query("SELECT * FROM equipos WHERE nombre='".$nombre."'");
    }
    else{
      return null;
    }
  }
  public function eliminarEquipo($nombre){
    if (!$this->error) {
      $delete="DELETE FROM equipos WHERE Nombre='".$nombre."'";
      $this->conexion->query($delete);
    }
    else{
      return null;
    }
  }
  public function mostrarEquipo(){
    if (!$this->error) {
      return $this->conexion->query("SELECT * FROM equipos");
    }
    else{
      return null;
    }
  }


}



 ?>
