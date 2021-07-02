<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$idpaquete = $_POST['idpaqueteupd'];
$nombre         = $_POST['nombreupd'];
$descripcion      = $_POST['descripcionupd'];
$costo       = $_POST['costoupd'];


    $sqlActualizar = "UPDATE paquetes SET  nombre_paq = '$nombre', descripcion_paq = '$descripcion', costo_paq = $costo WHERE idpaquete = $idpaquete";    
    if($cn->query($sqlActualizar) ){
       echo 1;
    } else {
        echo 0;
    }
   
?>
