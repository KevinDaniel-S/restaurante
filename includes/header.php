<?php 
session_start();
if(!isset($_SESSION['logged']))
  $_SESSION['logged'] = false;

$HOST = $_SERVER['REQUEST_URI'];
$uri  = explode('/', $HOST);
$valid = array("account", "paquetes", "reservaciones", "usuarios", "menu");

$URI = array();
foreach ($uri as $dir){
  if(!in_array($dir, $valid) and !preg_match('/.php/', $dir)){
    array_push($URI, $dir);
  }
}

$URI = implode("/", $URI);
if($URI == "/"){
  $URI = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
    <link rel="stylesheet" href="<?php echo $URI ?>/assets/bt4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $URI ?>/assets/dt/css/dt.min.css">
    <link rel="stylesheet" href="<?php echo $URI ?>/assets/fa/css/all.css">
    <link rel="stylesheet" href="<?php echo $URI ?>/assets/alert/css/alertify.min.css">
    <link rel="icon" href="<?php echo $URI ?>/assets/favicon.ico">

    <script src="<?php echo $URI ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $URI ?>/assets/bt4/js/bootstrap.min.js"></script>
    <script src="<?php echo $URI ?>/assets/dt/js/dt.min.js"></script>
    <script src="<?php echo $URI ?>/assets/alert/alertify.min.js"></script>
</head>
<body>
