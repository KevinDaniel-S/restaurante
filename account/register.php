<?php
$tituloPagina = "Registrarse";
include_once "../includes/header.php";
include_once "../includes/navbar.php";
include_once "../bd/conexion.php";

$cn = conexion();

$msg = "";
$usuario = "";
$msg_sql = "";

if(isset($_POST['registrarse'])){

  $usuario = strtolower($_POST['usuario']);
  $pass = $_POST['pass'];
  $confirm_pass = $_POST['confirm_pass'];
  if($pass == $confirm_pass){

      $sqlInsertar = "INSERT INTO usuarios VALUES (NULL,'$usuario', $pass, 0)";
      $cn->query($sqlInsertar);
      if($cn->error){
        $msg_sql = $cn->error;
      } else {
        $sqlLogin = "SELECT idUsuario, nombre_us, puesto_us FROM usuarios WHERE nombre_us = '$usuario' AND password_us = '$pass' ";
        $result = $cn->query($sqlLogin);
        $row    = $result->fetch_array();
        $id     = $row['idUsuario'];
        $user   = $row['nombre_us'];
        $puesto = $row['puesto_us'];

        $_SESSION['id']     = $id;
        $_SESSION["user"]   = $user;
        $_SESSION["puesto"] = $puesto;
        $_SESSION["logged"] = true;

        header("Location: ../index.php");
      }
  } else {

    $msg = "Las contraseñas no concuerdan"; 
  }
}

?>
<div class="row">
  <div class="col">
      <div class="card-header text-center">
        <h3 class="card-title">Registrarse</h3>
        <h6>Los empleados solo los puede registrar un adminstrador</h6>
      </div>
      <div class="card-body text-center">
        <form action="register.php" method="POST">
            <p class="text-danger"><?php echo $msg_sql; ?></p>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-group"
                value="<?php echo $usuario ?>" 
                placeholder="Nombre del usuario"
                title="Nombre del usuario"                
                name="usuario" id="usuario"
                required>
            </div>                 
            <div class="form-group">
                <p class="text-danger"><?php echo $msg; ?></p>
                <label for="pass">Contraseña </label>
                <input type="password" class="form-group" 
                  placeholder="Contraseña del usuario"                
                  title="Contraseña del usuario"                
                  name="pass" id="pass"
                  required>
            </div>                              
            <div class="form-group">
              <label for="confirm_pass"> Confirmar contraseña </label>
              <input type="password" class="form-group"
                placeholder="Confirmar la contraseña"
                name="confirm_pass" id="confirm_pass"
                required>
            </div>
            <button type="submit" class="btn btn-primary" id="registrarse" name="registrarse">
              Registrarse
            </button>
       </form>      
      </div>
  </div>
</div>

<?php

include_once "../includes/footer.php";
?>
