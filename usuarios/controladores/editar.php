<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$puesto = $_POST['puesto'];
$pass = $_POST['pass'];



    $sqlInsertar = "UPDATE usuarios SET nombre_us = '$usuario', puesto_us = '$puesto', password_us = '$pass' WHERE idusuario = $id";    

    if($cn->query($sqlInsertar)){
        echo 1;
    }else{
        echo 0;
    }

?>
