<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introducir usuario y contraseña</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
  <style>
  <?php if (isset($_COOKIE["fondo"])): ?>
body {background-color: <?php echo $_COOKIE["fondo"]; ?>}
  <?php var_dump($_COOKIE["fondo"]); ?>

  <?php endif; ?>
</style>
    <!-- Aqui tengo enlace a equipo -->

    <!-- Con Este form pasa mos todos los datos del forulario a login.php -->
    <form class="" action="login.php" method="post">

    <p>Usuario</p>
    <input type="text" name="usuario" value="" required><br>

    <p>Contraseña</p>
    <input type="password" name="pass" value="" required><br><br>


    <input type="submit" name="" value="Entrar"><br><br>
    <!-- Enlace a la pagina de REGISTRO -->
    <a href="registro.php">Registrarse</a><br>
    </form>
  </body>
</html>
