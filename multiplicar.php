
    <?php
    $tablas=[
      "primera"=>5,
      "segunda"=>13,
      "tercera"=>11
    ];
foreach ($tablas as $key => $value) {
  for ($i=1; $i <=10 ; $i++) {
    $multiplicar=$i*$value;
    echo "$value*$i = $multiplicar<br>";
  }
    echo "<br>";
}

     ?>
