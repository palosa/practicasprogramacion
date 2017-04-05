<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>borrarJdb</title>
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
    include"Jugador.php";

    $usuario = new Jugador();

    $usuario->eliminarJugadores($_GET['codigo']);

    $codigo=$_GET['codigo'];
    $nombre=$_GET['Nombre'];
    $procedencia=$_GET['Procedencia'];
    $altura=$_GET['Altura'];
    $peso=$_GET['Peso'];
    $posicion=$_GET['Posicion'];
    $nombreEquipo=$_GET['Nombre_equipo'];
    ?>
    <table border="1">
      <tr>
        <th>Codigo jugador eliminado</th>
        <th>Nombre de jugador eliminado</th>
        <th>Procedencia de jugador eliminado</th>
        <th>Altura de jugador eliminado</th>
        <th>Peso de jugador eliminado</th>
        <th>Posicion de jugador eliminado</th>
        <th>Nombre del equipo del jugador eliminado</th>
      </tr>
      <tr>
      <td><?= $codigo?><br></td>
      <td><?= $nombre?><br></td>
      <td><?= $procedencia ?><br></td>
      <td><?= $altura ?><br></td>
      <td><?= $peso?><br></td>
      <td><?= $posicion ?><br></td>
      <td><?= $nombreEquipo ?><br></td>
      </tr>
    </table>
  </body>
</html>
