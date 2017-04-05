<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>actualizarJDB</title>
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
?>
    <?php if (isset($_POST) && (!empty($_POST))): ?>

      <?php $dEquipos=$usuario->actualizarJugadores($_POST["codigo"],$_POST["nombre"],$_POST["procedencia"],$_POST["altura"],$_POST["peso"],$_POST["posicion"],$_POST["nomequi"]); ?>

      <table border="1">
        <tr>
          <th>Codigo jugador Actualizado</th>
          <th>Nombre de jugador Actualizado</th>
          <th>Procedencia de jugador Actualizado</th>
          <th>Altura de jugador Actualizado</th>
          <th>Peso de jugador Actualizado</th>
          <th>Posicion de jugador Actualizado</th>
          <th>Nombre del equipo del jugador Actualizado</th>
        </tr>
      <?php foreach ($dEquipos as $fila): ?>
      
<tr>
  <th><?= $fila["codigo"]?><br></th>
  <th><?= $fila["Nombre"]?><br></th>
  <th><?= $fila["Procedencia"]?><br></th>
  <th><?= $fila["Altura"]?><br></th>
  <th><?= $fila["Peso"]?><br></th>
  <th><?= $fila["Posicion"]?><br></th>
  <th><?= $fila["Nombre_equipo"]?><br></th>
</tr>

</table>
<table>
  <tr>
    <th><?= "<br><a href='actualizarJ.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Actualiza</a>"; ?></th>
    <th><?= "<br><a href='borrarJDB.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Eliminar</a>"; ?></th>
  </tr>
</table>
    <?php endforeach ?>
<?php endif ?>
  </body>
</html>
