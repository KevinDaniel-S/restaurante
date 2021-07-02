<?php 
require_once "../../bd/conexion.php";
$cn = conexion();


$idpaquete   = $_POST['idpaquetedel'];

$sqlEliminar = "DELETE FROM paquetes WHERE idpaquete = $idpaquete";

if($cn->query($sqlEliminar)){
    echo 1;
} else {
    echo 0;
}

?>
