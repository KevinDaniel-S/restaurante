<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$nombre = $_POST['nombreins'];
$descripcion = $_POST['descripcionins'];
$costo = $_POST['costoins'];



    $sqlInsertar = "INSERT INTO paquetes VALUES (NULL,'$nombre','$descripcion',$costo)";    

    if($cn->query($sqlInsertar)){
        echo 1;
    }else{
        echo 0;
    }

?>
