  <?php

    include "jugadordado.php";

    $jugadas = new jugadorDado();

    $jugadas->randomPos();

    for ($i=1; $i < 12 ; $i++) {
      echo "tirada.$i<br>";
      echo $jugadas;

    }






     ?>
