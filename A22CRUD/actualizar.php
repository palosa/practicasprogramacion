<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
    <a href="index.php">Index</a>
    <a href="listaequipos.php">Lista de los equipos</a>
    <?php if (!empty($_GET)): ?>
        <form class="" action="actualizarDB.php" method="post">

        <p>Nombre:<br>
        <input type="text" name="nombre" value="<?= $_GET['Nombre'] ?>" readonly="readonly"><br>

        <p>conferencia:<br>
          <input type="text" name="conferencia" value="<?= $_GET['Ciudad'] ?>"><br>

        <p>Ciudad:<br>
          <input type="text" name="ciudad" value="<?= $_GET['Conferencia'] ?>"><br>

          <p>Division:<br>
            <input type="text" name="division" value="<?= $_GET['Division'] ?>"><br><br>


        <input type="submit" value="Actualizar">

        </form>
    <?php endif; ?>
  </body>
</html>
