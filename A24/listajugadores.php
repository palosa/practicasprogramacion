<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de jugadores</title>
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
    include 'Jugador.php';
    $usuario = new Jugador();
    $resultado=$usuario->mostrarJugadores();
    ?>
    <table border="1">
    <tr>
      <th>Codigo jugador</th>
      <th>Nombre de jugador</th>
      <th>Procedencia de jugador</th>
      <th>Altura de jugador</th>
      <th>Peso de jugador</th>
      <th>Posicion de jugador</th>
      <th>Nombre del equipo del jugador</th>
      <th>Eliminar</th>
    </tr>
          <?php foreach ($resultado as $fila):?>
                <tr>
                  <th><?= $fila["codigo"]?><br></th>
                  <th><?= $fila["Nombre"]?><br></th>
                  <th><?= $fila["Procedencia"]?><br></th>
                  <th><?= $fila["Altura"]?><br></th>
                  <th><?= $fila["Peso"]?><br></th>
                  <th><?= $fila["Posicion"]?><br></th>
                  <th><?= $fila["Nombre_equipo"]?><br></th>
          <td><?="<br><a href='borrarJDB.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Eliminar</a>"; ?></td>
        </tr>

      <?php endforeach; ?>
</table>

  </body>
</html>
