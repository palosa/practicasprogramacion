<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'dbNBA.php';

    $usuario = new dbNBA();

    if (isset($_POST["nombre"]) && (!empty($_POST["nombre"])) && (empty($_POST["ciudad"])) && (empty($_POST["conferencia"])) && (empty($_POST["division"]))) {
      $dEquipos=$usuario->devolverEquipo($_POST["nombre"]);
      while ($fila= $dEquipos->fetch_assoc()) {
        echo $fila["Nombre"];
      }
    }
    elseif(isset($_POST) && (!empty($_POST))) {
      $MostrarInsertado=$usuario->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
      while ($fila= $MostrarInsertado->fetch_assoc()) {
        echo $fila["Nombre"]."<br>";
        echo $fila["Ciudad"]."<br>";
        echo $fila["Conferencia"]."<br>";
        echo $fila["Division"]."<br>";
      }
    }

     ?>
  </body>
</html>
