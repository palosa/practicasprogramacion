<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>insertarDB</title>
  </head>
  <body>
    <a href="index.php">Index</a>
    <a href="listaequipos.php">Lista de los equipos</a>
    <?php
    include 'dbNBA.php';

    $usuario = new dbNBA();

    if (isset($_POST) && (!empty($_POST))){
      $dEquipos=$usuario->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
      while ($fila= $dEquipos->fetch_assoc()) {
        echo "Nombre equipo :".$fila["Nombre"]."<br>";
        echo "Ciudad equipo :".$fila["Ciudad"]."<br>";
        echo "Conferencia equipo :".$fila["Conferencia"]."<br>";
        echo "Division equipo :".$fila["Division"]."<br>";
        echo  "<br><a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualiza</a>";
        echo  "<br><a href='borrarDB.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>Borrar</a>";

        }
    }

     ?>
  </body>
</html>
