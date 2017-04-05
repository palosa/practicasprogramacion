<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
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

<?php if (empty($_GET)): ?>
  <h1>Insertar Equipos</h1>
  <!-- Formularios de equipos -->
    <form class="" action="insertarDB.php" method="post">

      <p>Nombre:<br>
        <input type="text" name="nombre" value="">

        <p>conferencia:<br>
          <input type="text" name="conferencia" value="">

          <p>Ciudad:<br>
            <input type="text" name="ciudad" value="">

            <p>Division:<br>
              <input type="text" name="division" value=""><br>

              <!-- Boton de insertar equipos -->
                <input type="submit" name="name" value="Insertar">

    </form>

    -----------------------------------------------------------------------------------------------
    <h1>Insertar jugadores</h1>
<!-- Formulario de jugadores -->
    <form class="" action="insertarJDB.php" method="post">

    <p>Codigo:<br>
      <input type="text" name="codigo" value="">

      <p>Nombre:<br>
        <input type="text" name="nombre" value="">

        <p>Procedencia:<br>
          <input type="text" name="procedencia" value="">

          <p>Altura:<br>
            <input type="text" name="altura" value="">

            <p>Peso:<br>
              <input type="text" name="peso" value=""><br>

              <p>Posicion:<br>
                <input type="text" name="posicion" value=""><br>

                <p>Nombre de equipo:<br>
                  <select class="" name="nomequi">
                    <?php $resultado=$usuario->mostrarEquipo(); ?>
                    <option value=""></option>
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
