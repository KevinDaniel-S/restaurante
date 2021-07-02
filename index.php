<?php
$tituloPagina = "Mexicanisimo";
include_once "./includes/header.php";
include_once "./includes/navbar.php";

?>
<?php if($_SESSION['logged']){ ?>
  <H1>Mexicanísimo</H1>
  <H2>Bienvenido <?php echo $_SESSION['user']; ?>

<?php } else { ?>
  <H2>Bienvenido a Mexicanísimo</H2>

<?php } ?>

<?php include_once "./includes/footer.php"; ?>
