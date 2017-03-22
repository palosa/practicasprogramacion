<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>borrardb</title>
  </head>
  <body>
    <a href="index.php">Index</a>
    <a href="listaequipos.php">Lista de los equipos</a>
    <?php
    include"dbNBA.php";

    $usuario = new dbNBA();

    $usuario->eliminarEquipo($_GET['Nombre']);
    $Nombre=$_GET['Nombre'];
    $Ciudad=$_GET['Ciudad'];
    $Conferencia=$_GET['Conferencia'];
    $Division=$_GET['Division'];
    echo "Equipo: ".$Nombre."<br>"."Ciudad: ".$Ciudad."<br>"."Conferencia : ".$Conferencia."<br>"."Division : ".$Division."<br>";



     ?>
  </body>
</html>
