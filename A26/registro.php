<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de datos</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      </tr>
    </table>
    <?php
    include 'usuario.php';
    $user = new Usuario();

    if (isset($_POST['email'])) {
      $nuevo=$user->User($_POST["email"]);
    if ($_POST["pass"]==$_POST["pass2"]){
    if (!empty($nuevo)) {
       ?>  <div>
        <?php  echo "Existe ya el usuario ".$_POST["email"]; ?>
        </div>
       <?php
    }else {
      $user->insertarUsuario($_POST["nombre"],$_POST["apellidos"],$_POST["email"],sha1($_POST["pass"]));
      echo "Usuario creado";
    }
}else {
  echo "Las contraseñas no coinciden";
    }
  }


    ?>

    <form class="" action="" method="post">
      <p>Email</p>
      <input type="text" name="email" value="" required><br>
      <p>Contraseña</p>
      <input type="password" name="pass" value="" required><br>
      <p>Repetir contraseña</p>
      <input type="password" name="pass2" value="" required><br>
      <p>Nombre</p>
      <input type="text" name="nombre" value="" required><br>
      <p>Apellidos</p>
      <input type="text" name="apellidos" value="" required><br><br>

      <input type="submit" name="" value="Registrarse">

    </form>

  </body>
</html>
