<?php

$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$curso=$_POST["curso"];
$ciclo=$_POST["ciclo"];
$PROG=$_POST["PROG"];
$ED=$_POST["ED"];
$LLMM=$_POST["LLMM"];
$BBDD=$_POST["BBDD"];

if ($media=($PROG+$ED+$LLMM+$BBDD)) {
    $media=$media/4;
}

echo "Nombre del Alumno es:".$nombre."<br>";
echo "Los apellidos del Alumno son:".$apellidos."<br>";
echo "El Alumno esta en el Curso:".$curso."<br>";
echo "El ciclo que esta cursando el Alumno es:".$ciclo."<br>";
echo "La nota es:".$PROG."<br>";
echo "La nota es:".$ED."<br>";
echo "La nota es:".$LLMM."<br>";
echo "La nota es:".$BBDD."<br>";
echo "La media es:".$media."<br>";







 ?>
