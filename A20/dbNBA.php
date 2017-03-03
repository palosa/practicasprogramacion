<?php
// Creamos una clase denominada dbNba donde tenemenos la conexion a la DB y las consultas realizadas
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
  // en esta funcion mostramos todos los equipos en index.php
  public function devolverEquiposLocal($equipoLocal,$equipoVis,$temporada){
    if (!$this->error) {
      $resumen=$this->conexion->query("SELECT equipo_local,equipo_visitante,temporada FROM partidos  WHERE equipo_local='".$equipoLocal."' AND equipo_visitante='".$equipoVis."' AND temporada='".$temporada."'");
      return $resumen;
    }
    else{
      return null;
    }
  }
  // con estas funciones le mandamos a index mediante el select la informacion de las consultas
  public function devolverEquiposLo(){
    if (!$this->error) {
      $resumen=$this->conexion->query("SELECT DISTINCT equipo_local FROM partidos");
      return $resumen;
    }
    else{
      return null;
    }
  }
  public function devolverEquiposVisitante(){
    if (!$this->error) {
      $resumen=$this->conexion->query("SELECT DISTINCT equipo_visitante FROM partidos");
      return $resumen;
    }
    else{
      return null;
    }
  }
  public function devolverTemporada(){
    if (!$this->error) {
      $resumen=$this->conexion->query("SELECT DISTINCT temporada FROM partidos");
      return $resumen;
    }
    else{
      return null;
    }
  }
  // con esta funcion es para el select para recibir los datos del select de index.php
  public function devolverEquipos($equipoLocal,$equipoVis,$temporada){

       $resumen="SELECT equipo_local,equipo_visitante,temporada FROM partidos";

        if (!empty($equipoLocal)) {
            $resumen=$resumen." WHERE equipo_local='".$equipoLocal."'";
            if (!empty($equipoVis)) {
              $resumen=$resumen." AND equipo_visitante='".$equipoVis."'";
            }
            if (!empty($temporada)) {
              $resumen=$resumen." AND temporada='".$temporada."'";
            }
            return $this->conexion->query($resumen);
        }
        elseif (!empty($equipoVis)) {
          $resumen=$resumen." WHERE equipo_visitante='".$equipoVis."'";
          if (!empty($temporada)) {
            $resumen=$resumen." AND temporada='".$temporada."'";
          }
            return $this->conexion->query($resumen);
        }
        elseif (!empty($temporada)) {
          $resumen=$resumen." WHERE temporada='".$temporada."'";
          return $this->conexion->query($resumen);
        }
}

}
?>
