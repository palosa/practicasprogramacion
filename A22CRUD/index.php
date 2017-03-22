<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <a href="index.php">Index</a>
    <a href="listaequipos.php">Lista de los equipos</a>
<?php if (empty($_GET)): ?>
    <form class="" action="insertarDB.php" method="post">

    <p>Nombre:<br>
    <input type="text" name="nombre" value="">

    <p>conferencia:<br>
      <input type="text" name="conferencia" value="">

    <p>Ciudad:<br>
      <input type="text" name="ciudad" value="">

      <p>Division:<br>
        <input type="text" name="division" value=""><br>


    <input type="submit" name="name" value="Insertar">

    </form>
<?php endif; ?>

  </body>
</html>
