<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ActualizarJ</title>
  </head>
  <body>
    <?php include 'Equipo.php';

    $usuario = new Equipo(); ?>
    <table>
      <tr>
      <th><a href="index.php">Index</a></th>
      <th><a href="listaequipos.php">Lista de los equipos</a></th>
      <th><a href="listajugadores.php">Lista de los jugadores</a></th>
      </tr>
    </table>
    <?php if (!empty($_GET)): ?>

        <form class="" action="actualizarJDB.php" method="post">

          <p>Codigo:<br>
            <input type="text" name="codigo" value="<?=$_GET['codigo'] ?>"readonly="readonly"><br>

            <p>Nombre:<br>
              <input type="text" name="nombre" value="<?=$_GET['Nombre'] ?>"><br>

              <p>Procedencia:<br>
                <input type="text" name="procedencia" value="<?=$_GET['Procedencia'] ?>"><br>

                <p>Altura:<br>
                  <input type="text" name="altura" value="<?=$_GET['Altura'] ?>"><br>

                  <p>Peso:<br>
                    <input type="text" name="peso" value="<?=$_GET['Peso'] ?>"><br>

                    <p>Posicion:<br>
                      <input type="text" name="posicion" value="<?=$_GET['Posicion'] ?>"><br>

                      <p>Nombre de equipo:<br>
                        <select class="" name="nomequi">
                          <?php $resultado=$usuario->mostrarEquipo(); ?>
                          <option value=""><?=$_GET['Nombre_equipo'] ?></option>
                          <?php foreach ($resultado as  $value): ?>
                            <option value="<?php echo $value['Nombre']; ?>"><?php echo $value['Nombre']; ?></option>
                          <?php endforeach; ?>
                        </select>

                    <!-- Boton de insertar los datos del formulario jugadores-->
                          <input type="submit" name="name" value="Insertar">

        </form>
    <?php endif; ?>
  </body>
</html>
