<?php 
require_once "../../bd/conexion.php";
$cn = conexion();


$id   = $_POST['idItemdel'];

$sqlEliminar = "DELETE FROM menu WHERE idItem = $id";

if($cn->query($sqlEliminar)){
    echo 1;
} else {
    echo 0;
}

?>
