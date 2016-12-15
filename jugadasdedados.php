  <?php

    include "jugadordado.php";

    $jugadas = new jugadorDado();

    $jugadas->setMinNumDado(2);

    $jugadas->setMaxNumDado(14);

    for ($i=1; $i <= 12 ; $i++) {
      echo "Tirada$i<br>";
      echo $jugadas->randomPos()."<br>";

    }






     ?>
