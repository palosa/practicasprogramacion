<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Equipos</title>
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
    $resultado=$usuario->mostrarEquipo();
    ?>
    <table border="1">
    <tr>
      <th>Nombre equipo</th>
      <th>Ciudad equipo</th>
      <th>Conferencia equipo</th>
      <th>Division equipo</th>
      <th>Eliminar</th>
    </tr>
          <?php foreach ($resultado as $fila):?>
                <tr>
          <td><?= $fila['Nombre']?><br></td>
          <td><?= $fila['Ciudad']?><br></td>
          <td><?= $fila['Conferencia']?><br></td>
          <td><?= $fila['Division']?><br></td>
          <td><?="<br><a href='borrarDB.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>Eliminar</a><br>"; ?></td>
        </tr>

      <?php endforeach; ?>
</table>

  </body>
</html>
