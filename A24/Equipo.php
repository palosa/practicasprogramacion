<?php
include 'db.php';

class Equipo extends db
{

  function __construct()
  {
    // Realizamos la conexion a la base de datos
  parent::__construct();

  }
  // en esta funcion insertamos los equipos en la base de datos mediante el formulari
  public function insertarEquipo($nombre,$ciudad,$conferencia,$division){

    $sql="INSERT INTO equipos(nombre,ciudad,conferencia,division) VALUES('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
    // $sqlInsercion="INSERT INTO equipos(nombre,ciudad,conferencia,division) Values('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";

    $resultado=$this->realizarConsulta($sql);

    $mostrar="SELECT * FROM equipos WHERE nombre='".$nombre."' AND ciudad='".$ciudad."' AND conferencia='".$conferencia."' AND division='".$division."'";
    $resultado=$this->realizarConsulta($mostrar);
    if ($resultado!=null) {
      $tabla=[];
      while ($fila=$resultado->fetch_assoc()) {
        $tabla[]=$fila;
      }
      return $tabla;
    }
    else{
      return null;
    }
  }

  public function mostrarEquipo(){
    // contruccion de la consulta
    $sql="SELECT * FROM equipos";

    // realizamos la consulta$
    $resultado=$this->realizarConsulta($sql);

    if ($resultado!=null) {
      $tabla=[];
      while ($fila=$resultado->fetch_assoc()) {
        $tabla[]=$fila;
      }
      return $tabla;
    }
    else{
      return null;
    }
  }


  public function actualizarEquipo($nombre,$ciudad,$conferencia,$division){

      $update="UPDATE equipos SET Nombre='".$nombre."',Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."'";
      $this->realizarConsulta($update);
      $mostrar="SELECT * FROM equipos WHERE nombre='".$nombre."'";
      $resultado=$this->realizarConsulta($mostrar);
      if ($resultado!=null) {
        $tabla=[];
        while ($fila=$resultado->fetch_assoc()) {
          $tabla[]=$fila;
        }
        return $tabla;
      }
      else{
        return null;
      }


}
  public function eliminarEquipo($nombre){

    $delete="DELETE FROM equipos WHERE Nombre='".$nombre."'";
    $this->realizarConsulta($delete);
    
  }
}



 ?>
