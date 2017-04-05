<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>insertarDB</title>
  </head>
  <body>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      <th><a href="listaequipos.php">Lista de los equipos</a></th>
      <th><a href="listajugadores.php">Lista de los jugadores</a></th>
      </tr>
    </table>
    <?php
    include 'Equipo.php';

    $usuario = new Equipo();
?>
    <?php if (isset($_POST) && (!empty($_POST))): ?>
      <?php $dEquipos=$usuario->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]); ?>
      <table border="1">
      <tr>
        <th>Nombre equipo</th>
        <th>Ciudad equipo</th>
        <th>Conferencia equipo</th>
        <th>Division equipo</th>
      </tr>
      <?php foreach ($dEquipos as $fila): ?>
        <tr>
        <th><?= $fila["Nombre"]?><br></th>
        <th><?= $fila["Ciudad"]?><br></th>
        <th><?= $fila["Conferencia"]?><br></th>
        <th><?= $fila["Division"]?><br></th>
        </tr>
</table>
<table>
  <tr>
    <th><?= "<br><a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualiza</a>"; ?></th>
    <th><?= "<br><a href='borrarDB.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>Eliminar</a>"; ?></th>
  </tr>
</table>
    <?php endforeach; ?>
  <?php endif; ?>


  </body>
</html>
