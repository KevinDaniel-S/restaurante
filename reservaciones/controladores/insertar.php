<?php 
require_once "../../bd/conexion.php";
session_start();
$cn = conexion();

$idreservacion = $_POST['idreservacionins'];
$fecha         = $_POST['fechains'];
$cantidad      = $_POST['cantidadins'];
$idpaquete     = $_POST['paqueteins'];

$sqlbuscaFecha = "SELECT count(fecha_h_res) as total FROM reservacion WHERE SUBSTRING(fecha_h_res,1,10) = SUBSTRING('$fecha',1,10)";
$result        = $cn->query($sqlbuscaFecha);
$data          = $result->fetch_assoc();
$id            = $_SESSION['id'];
    $sqlInsertar = "INSERT INTO reservacion VALUES($idreservacion, '$fecha', $cantidad, $id)";
    $sqlInsertarPedido = "INSERT INTO pedido VALUES(NULL,$idreservacion,$idpaquete, $id)";

$val = 0;
if($data['total'] == 0){
    if($cn->query($sqlInsertar) && $cn->query($sqlInsertarPedido)){
        $val = 1;
    }else{
        $val = 0;
    }
}
else
{ 
    $val = 0;
}
echo $val;
?>
