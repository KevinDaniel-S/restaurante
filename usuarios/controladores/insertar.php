<?php 
require_once "../../bd/conexion.php";
$cn = conexion();

$user = strtolower($_POST['user']);
$puesto = $_POST['puesto'];
$pass = $_POST['pass'];



    $sqlInsertar = "INSERT INTO usuarios VALUES (NULL,'$user','$pass', $puesto)";

    if($cn->query($sqlInsertar)){
        echo 1;
    }else{
        echo 0;
    }

?>
