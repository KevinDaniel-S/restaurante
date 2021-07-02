<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$id = $_POST['idusuariodel'];



    $sqlDel = "DELETE FROM usuarios WHERE idusuario = $id";    

    if($cn->query($sqlDel)){
        echo 1;
    }else{
        echo 0;
    }

?>
