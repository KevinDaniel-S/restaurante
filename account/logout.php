<?php
include_once "../includes/header.php";

$_SESSION['user'] = '';
$_SESSION['puesto'] = '';
$_SESSION['logged'] = false;

header("Location: ../index.php");

?>
