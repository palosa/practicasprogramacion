<?php
session_start();
if(!isset($_SESSION["usuario"])){
header("Location: index.php");
exit(); }

public function colorCookie(){
  if (isset($_COOKIE["fondo"])) {
    return $_COOKIE["fondo"];
  }
  return null;
}
?>
