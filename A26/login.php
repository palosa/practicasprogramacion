<?php
include 'usuario.php';
$usuario = new Usuario();
session_start();

$login=$usuario->User($_POST["usuario"]);

if (!empty($login)==$_POST["usuario"]) {
if ($login[0]["pass"]==sha1($_POST["pass"])){
  $_SESSION["usuario"] = $_POST["usuario"];
              // Redirect user to index.php
	    header("Location: MiPerfil.php");
}else {

    echo "Contraseña incorrecta";
}
}else {
  echo "No existe el usuario";
}



 ?>
