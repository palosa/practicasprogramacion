<?php
// con esto lo que hacemos es cerrar las sesiones solo poniendo con un enlace aqui
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: index.php");
}
 ?>
