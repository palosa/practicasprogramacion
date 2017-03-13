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

     ?>
  </body>
</html>
