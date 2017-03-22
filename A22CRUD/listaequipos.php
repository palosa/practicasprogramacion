<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Equipos</title>
  </head>
  <body>
    <a href="index.php">Index</a>
    <a href="listaequipos.php">Lista de los equipos</a>
    <?php
    include 'dbNBA.php';

    $usuario = new dbNBA();
$equipos=$usuario->mostrarEquipo();

    while ($fila=$equipos->fetch_assoc()){
      echo $fila['Nombre']."<br>";
      echo $fila['Ciudad']."<br>";
      echo $fila['Conferencia']."<br>";
      echo $fila['Division'];
      echo "<br><a href='borrarDB.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>Eliminar</a><br>";
    }

     ?>
  </body>
</html>
