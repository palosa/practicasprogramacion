<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filtrado</title>

  </head>
  <body>
    <form class="" action="filtrado.php" method="post">

    <p>Equipo local:<br>
    <input type="text" name="local" value="">

    <p>Equipo Visitante:<br>
      <input type="text" name="visitante" value="">

    <p>Temporada:<br>
      <input type="text" name="temporada" value="">

    <input type="submit" name="name" value="FILTRAR">

    </form>


<p>-------------------------------------------------------------------------------------------------------------------------------


     <?php
       include 'dbNBA.php';
         $nba= new dbNBA();
      ?>
<form  action="filtrado.php" method="post">
      <p>Equipo local:<br>
    <select class="" name="local">
      <?php $resultado=$nba->devolverEquiposLo(); ?>
      <option value=""></option>
      <?php foreach ($resultado as $key => $value): ?>
        <option value="<?php echo $value['equipo_local']; ?>"><?php echo $value['equipo_local']; ?></option>
      <?php endforeach; ?>
    </select>
    <p>Equipo Visitante:<br>
    <select class="" name="visitante">
      <?php $resultado=$nba->devolverEquiposVisitante(); ?>
      <option value=""></option>
      <?php foreach ($resultado as $key => $value): ?>
        <option value="<?php echo $value['equipo_visitante']; ?>"><?php echo $value['equipo_visitante']; ?></option>
      <?php endforeach; ?>
    </select>
    <p>Temporada:<br>
    <select class="" name="temporada">
      <?php $resultado=$nba->devolverTemporada(); ?>
      <option value=""></option>
      <?php foreach ($resultado as $key => $value): ?>
        <option value="<?php echo $value['temporada']; ?>"><?php echo $value['temporada']; ?></option>
      <?php endforeach; ?>
    </select>
    <input type="submit" name="name" value="FILTRAR">

    </form>
  </body>
</html>
