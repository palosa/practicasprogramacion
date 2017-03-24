<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      <th><a href="listaequipos.php">Lista de los equipos</a></th>
      </tr>
    </table>
    <?php if (!empty($_GET)): ?>
        <form class="" action="actualizarDB.php" method="post">

        <p>Nombre:<br>
        <input type="text" name="Nombre" value="<?=$_GET['Nombre'] ?>" readonly="readonly"><br>

        <p>conferencia:<br>
          <input type="text" name="Conferencia" value="<?=$_GET['Ciudad'] ?>"><br>

        <p>Ciudad:<br>
          <input type="text" name="Ciudad" value="<?= $_GET['Conferencia'] ?>"><br>

        <p>Division:<br>
            <input type="text" name="Division" value="<?= $_GET['Division'] ?>"><br><br>


        <input type="submit"  value="Actualizar">


        </form>
    <?php endif; ?>
  </body>
</html>
