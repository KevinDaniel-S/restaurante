<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$id      = $_POST['id'];
$nombre  = $_POST['nombre'];
$tamanio = $_POST['tamanio'];
$tipo    = $_POST['tipo'];
$precio  = $_POST['precio'];


$sqlActualizar = "UPDATE menu SET nombre = '$nombre', precio = '$precio', 
                  tamanio = '$tamanio', tipo = '$tipo' WHERE idItem = '$id'";

if($cn->query($sqlActualizar)){
  echo 1;
} else {
  echo $cn->error;
}
   
?>
