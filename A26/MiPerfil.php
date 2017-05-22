<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar el Perfil</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <style media="screen">
  <?php
  include 'seguridad.php';
  $seguridad = NEW seguridad();
  echo $this->colorCookie();
  if(!isset($_POST["color"])): ?>
        body {background-color: <?php echo $seguridad->colorCookie(); ?>}
        <?php elseif ($seguridad->colorCookie()!=$_POST["color"]): ?>
        body {background-color: <?php echo $_POST["color"]; ?>}
        <?php endif; ?>


    </style>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      </tr>
    </table>
    <?php
    // Seguridad.php controla que el usuario este logeado

      // Usuario realiza consultas en DB $_COOKIE $_SESSION
      include 'usuario.php';
      $usuario = new Usuario();
      $rol = $usuario->rol();
      if (isset($_POST) && (!empty($_POST))){
        setcookie("fondo",$_POST["color"],time()+3600);
        
        $actualiza = $usuario->actualizarUsuario($_POST["email"],$_POST["nombre"],$_POST["apellidos"],$_POST["rol"]);
    }
    // tiene todos los datos del USUARIO logeado


    $user = $usuario->User($_SESSION["usuario"]);

     ?>
     <!-- con este if le digo   que si no esta vacio que entre dentro del if y
      con el foreach para poder mostrar a los valores -->
     <?php if (!empty($user)): ?>
       <?php foreach ($user as  $value) : ?>
     <form class="" action="Miperfil.php" method="post">
    <p>Email</p>
    <input type="text" name="email" value="<?php echo $value["email"] ?>" readonly="readonly"><br>
    <p>Nombre</p>
    <input type="text" name="nombre" value="<?php echo $value["nombre"] ?>"><br>
    <p>Apellidos</p>
    <input type="text" name="apellidos" value="<?php echo $value["apellidos"] ?>"><br></br>
    <p>rol</p>
    <select class="" name="rol">
      <?php foreach ($rol as  $value) :?>
      <option value="<?php echo $value['rol']?>"><?php echo $value['rol']?></option>
      <?php endforeach; ?>
    </select>
    <select class="" name="color">

    <option value="blue">blue</option>
    <option value="red">red</option>
    <option value="orange">orange</option>
    <option value="yellow">yellow</option>
    <option value="green">green</option>
    <option value="pink">pink</option>

</select>
    <input type="submit" name="" value="Actualizar">
    <!-- Con este enlace a la pagina logout.php lo que hacemos es cerrar la sesion inicada -->
    <a href="logout.php">Cerrar SESION</a>
    </form>
  <?php endforeach; ?>
  <?php endif; ?>

  </body>
</html>
