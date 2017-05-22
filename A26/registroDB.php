<?php
include 'usuario.php';
$user = new Usuario();



if (isset($_POST) && (!empty($_POST))){

$nuevo=$user->User($_POST["email"]);
if (!empty($nuevo)) {
    echo "Existe ya un Usuario";
}else {
  $user->insertarUsuario($_POST["nombre"],$_POST["apellidos"],$_POST["email"],sha1($_POST["pass"]));
  echo "Usuario creado";
}

}




 ?>
