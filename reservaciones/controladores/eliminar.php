<?php 
require_once "../../bd/conexion.php";
$cn = conexion();


$idpedido   = $_POST['idpedidodel'];

$sqlEliminar = "UPDATE pedido SET acept_rech_ped = 0 WHERE idpedido = $idpedido";

if($cn->query($sqlEliminar)){
    echo 1;
} else {
    echo 0;
}

?>
