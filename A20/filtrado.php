<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filtrado</title>
  </head>
  <body>
    <?php
    include 'dbNBA.php';
    $nba= new dbNBA();
    $resultado=$nba->devolverEquipos($_POST["local"],$_POST["visitante"],$_POST["temporada"]);
    // comprobacion del $_POST

  if (isset($_POST["local"]) && (!empty($_POST["local"]) || isset($_POST["visitante"]) && (!empty($_POST["visitante"])) || isset($_POST["temporada"]) && (!empty($_POST["temporada"])))) {

        if ($resultado!=null) {
          ?>
          <table border="1">
            <tr>
              <th>Equipo Local</th>
              <th>Equipo Visitnte</th>
              <th>Temporada</th>
            </tr>

          <?php while ($resultados= $resultado->fetch_assoc()): ?>
            <tr>
            <td><?= $resultados["equipo_local"] ?><br></td>
            <td><?= $resultados["equipo_visitante"] ?><br></td>
            <td><?= $resultados["temporada"] ?><br></td>
            </tr>
<?php endwhile; ?>
</table>
<?php
      }
    }
     else {
       ?> <a href="index.php">No me has enviado nada</a> <?php
   }
?>


  </body>
</html>
