<?php

include 'db.php';

class Usuario extends db
{

  function __construct()
  {
    parent::__construct();
  }

  // en esta funcion insertamos los USUARIOS en la base de datos mediante el formularios
  public function insertarUsuario($nombre,$apellidos,$email,$pass){

    $sql="INSERT INTO usuarios(usuario,nombre,apellidos,email,rol,pass) VALUES('".$email."','".$nombre."','".$apellidos."','".$email."','0','".$pass."')";


    $this->realizarConsulta($sql);
  }
  //En esta funcion me DEVUELVE TODOS datos del USUARIO que esta logeado
  public function User($email){

    $sql="SELECT * FROM usuarios WHERE email='".$email."'";


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
  // Con esta funcion actualizo los datos de USUARIO
  public function actualizarUsuario($email,$nombre,$apellidos,$rol){

      $update="UPDATE usuarios SET nombre='".$nombre."',apellidos='".$apellidos."',rol='".$rol."' WHERE email='".$email."'";
      $this->realizarConsulta($update);
      $mostrar="SELECT * FROM usuarios WHERE email='".$email."'";
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
    // Con esta funcion me DEVUELVE los datos de la tabla ROL
    public function Rol(){

      $sql="SELECT rol FROM roles";


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
}
 ?>
