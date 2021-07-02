<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$idpedido = $_POST['idpedidoupd'];
$fecha         = $_POST['fechaupd'];
$cantidad      = $_POST['cantidadupd'];
$idpaquete       = $_POST['paqueteupd'];

$sqlbuscaidreservacion = "SELECT idreservacion FROM pedido WHERE idpedido = $idpedido";
$result = $cn->query($sqlbuscaidreservacion);
$data   = $result->fetch_assoc();
$id = $data['idreservacion'];


$val = 0;
if($id == 0){
$val = 0;
}
else{
    $sqlActualizar = "UPDATE reservacion SET fecha_h_res = '$fecha', cantidad_res = $cantidad WHERE idreservacion = $id";
    $sqlActualizarPedido = "UPDATE pedido SET idpaquete = $idpaquete WHERE idpedido = $idpedido";
    if($cn->query($sqlActualizar) && $cn->query($sqlActualizarPedido)){
        $val = 1;
    } else {
        $val = 0;
    }
    }
echo $val;

?>
