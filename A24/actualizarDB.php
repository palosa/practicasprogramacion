<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>actualizarDB</title>
  </head>
  <body>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      <th><a href="listaequipos.php">Lista de los equipos</a></th>
      <th><a href="listajugadores.php">Lista de los jugadores</a></th>
      </tr>
    </table>
    <br>
    <?php
    include 'Equipo.php';
    $usuario = new Equipo();
    ?>
    <?php if (isset($_POST) && (!empty($_POST))): ?>

      <?php $dEquipos=$usuario->actualizarEquipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]); ?>
      <table border="1">
        <tr>
          <th>Codigo jugador</th>
          <th>Nombre de jugador</th>
          <th>Procedencia de jugador</th>
          <th>Altura de jugador</th>
          <th>Peso de jugador</th>
          <th>Posicion de jugador</th>
          <th>Nombre del equipo del jugador</th>
        </tr>
      <?php foreach ($dEquipos as $fila): ?>
<tr>


         <td><?= $fila["Nombre"]; ?><br></td>
         <td><?= $fila["Ciudad"]; ?><br></td>
         <td><?= $fila["Conferencia"]; ?><br></td>
         <td><?= $fila["Division"]; ?><br></td>
</tr>

</table>
<table>
  <tr>
    <th><?= "<br><a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualiza</a>"; ?></th>
    <th><?= "<br><a href='borrarDB.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>Eliminar</a>"; ?></th>
  </tr>
</table>
    <?php endforeach ?>
<?php endif ?>
  </body>
</html>
