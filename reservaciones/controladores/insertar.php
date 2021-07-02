<?php 
require_once "../../bd/conexion.php";
session_start();
$cn = conexion();


$error = false;

$fecha         = $_POST['fechains'];
$hora          = $_POST['hora'];
$cantidad      = $_POST['cantidadins'];
$idpaquete     = $_POST['paqueteins'];

if($fecha == ""){
  $error = true;
  echo "La fecha no fue ingresada <br>";
}

if($hora == ""){
  $error = true;
  echo "La hora no fue ingresada <br>";
}

if($cantidad == ""){
  $error = true;
  echo "La cantidad no fue ingresada <br>";
}

if($idpaquete == ""){
  $error = true;
  echo "La id del paquete no fue ingresada <br>";
}
if(!$error){
  if($hora < '10:00' || $hora >= '23:00'){
    $error = true;
    echo "No estamos abiertos a esa hora<br>";
  }

  if($fecha < date("Y-m-d")){
    $error = true;
    echo "Esa fecha ya pasó<br>";
  }
}
if(!$error){
  $sqlbuscaFecha = "SELECT count(fecha_h_res) as total FROM reservacion WHERE fecha_h_res = '$fecha'";

  $result        = $cn->query($sqlbuscaFecha);
  $data          = $result->fetch_assoc();
  $usuario       = $_SESSION['id'];

  $sqlInsertar = "INSERT INTO reservacion VALUES(NULL, '$fecha', '$hora', '$cantidad', '$usuario', '$idpaquete')";
  
  if($data['total'] == 5){
    echo "Ya no quedan más reservaciones para esa hora<br>";
  } else {
    if($cn->query($sqlInsertar)){
      $val = 200;
    } else {
      $val = $cn->error;
    }

  }
}
echo $val;
?>
