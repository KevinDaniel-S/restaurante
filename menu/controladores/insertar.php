<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$nombre  = $_POST['nombre'];
$tamanio = $_POST['tamanio'];
$tipo    = $_POST['tipo'];
$precio  = $_POST['precio'];

$sqlInsertar = "INSERT INTO menu VALUES (NULL,'$nombre','$precio', '$tamanio', '$tipo')";

if($cn->query($sqlInsertar)){
  echo 1;
}else{
  echo $cn->error;
}

?>
