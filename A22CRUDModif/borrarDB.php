<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>borrardb</title>
  </head>
  <body>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      <th><a href="listaequipos.php">Lista de los equipos</a></th>
      </tr>
    </table>
    <br>
    <?php
    include"dbNBA.php";

    $usuario = new dbNBA();

    $usuario->eliminarEquipo($_GET['Nombre']);

    $Nombre=$_GET['Nombre'];
    $Ciudad=$_GET['Ciudad'];
    $Conferencia=$_GET['Conferencia'];
    $Division=$_GET['Division'];
    ?>
    <table border="1">
      <tr>
        <th>Nombre equipo eliminado</th>
        <th>Ciudad equipo eliminado</th>
        <th>Conferencia equipo eliminado</th>
        <th>Division equipo eliminado</th>
      </tr>
      <tr>
      <td><?= $Nombre?><br></td>
      <td><?= $Ciudad?><br></td>
      <td><?= $Conferencia ?><br></td>
      <td><?= $Division ?><br></td>
      </tr>
    </table>
  </body>
</html>
