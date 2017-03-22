<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>actualizarDB</title>
  </head>
  <body>
    <a href="index.php">Index</a>
    <a href="listaequipos.php">Lista de los equipos</a>
    <?php
    include 'dbNBA.php';
    $usuario= new dbNBA();

    if (isset($_POST) && (!empty($_POST))){
      $dEquipos=$usuario->actualizarEquipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
      while ($fila= $dEquipos->fetch_assoc()) {
        echo "Nombre equipo :".$fila["Nombre"]."<br>";
        echo "Ciudad equipo :".$fila["Ciudad"]."<br>";
        echo "Conferencia equipo :".$fila["Conferencia"]."<br>";
        echo "Division equipo :".$fila["Division"]."<br>";
        echo  "<a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualizar</a>";
        echo  "<a href='borrarDB.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>Borrar</a>";
      }
    }
     ?>
  </body>
</html>
