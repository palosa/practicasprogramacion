<?php
// conexion DB Clase db
class db
{
  private $host = "localhost";
  private $user = "root";
  private $pass = "root";
  private $db_name = "miperfil";

  private $conexion;
  //controlar errores
  private $error=false;
  private $error_msj="";

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno){
          $this->error=true;
      }
  }
  //Funcion para saber si hay error en la conexion
  function hayerror(){
    return $this->error;
  }
  //Funcion que devuelve mensaje de error
  function msjError(){
    return $this->error_sj;
  }
  public function realizarConsulta($consulta){

    if($this->error==false){
      $resultado = $this->conexion->query($consulta);

      return $resultado;
    }
    else {
      $this->error_msj="No se puede realizar la consulta:".$consulta;
      return null;
    }
  }
}



 ?>
