<?php
include 'db.php';

class Jugador extends db
{

  function __construct()
  {
    // Realizamos la conexion a la base de datos
  parent::__construct();

  }
  // en esta funcion insertamos los equipos en la base de datos mediante el formulari
  public function insertarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$nombreEquipo){

    $sql="INSERT INTO jugadores(codigo,Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) VALUES(".$codigo.",'".$nombre."','".$procedencia."','".$altura."',".$peso.",'".$posicion."','".$nombreEquipo."')";
    $resultado=$this->realizarConsulta($sql);

    $mostrar="SELECT * FROM jugadores WHERE codigo='".$codigo."' AND Nombre='".$nombre."' AND Procedencia='".$procedencia."' AND Altura='".$altura."'AND Peso='".$peso."'AND Posicion='".$posicion."'AND Nombre_equipo='".$nombreEquipo."'";
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

  public function mostrarJugadores(){
    // contruccion de la consulta
    $sql="SELECT * FROM jugadores";

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

  public function actualizarJugadores($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$nombreEquipo){


      $update="UPDATE jugadores SET codigo='".$codigo."',Nombre='".$nombre."',Procedencia='".$procedencia."',Altura='".$altura."',Peso='".$peso."',Posicion='".$posicion."',Nombre_equipo='".$nombreEquipo."' WHERE codigo='".$codigo."'";
      $this->realizarConsulta($update);
      $mostrar="SELECT * FROM jugadores WHERE codigo='".$codigo."'";
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
  public function eliminarJugadores($codigo){

    $delete="DELETE FROM jugadores WHERE codigo=".$codigo;
    $this->realizarConsulta($delete);

  }
}
 ?>
