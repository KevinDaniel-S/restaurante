<?php 
 $tituloPagina = "Login";
 require_once "../includes/header.php";  
 require_once "../includes/navbar.php";
 require_once "../bd/conexion.php";
$cn = conexion();

$result = "";
$cuenta = "";
$error  = "";

if(isset($_POST['ingresar'])){

    $cuenta = strtolower($_POST['cuentauser']);
    $pass = $_POST['pass'];
    $sqlLogin = "SELECT idUsuario, nombre_us, puesto_us FROM usuarios WHERE nombre_us = '$cuenta' AND password_us = '$pass' ";
    $result = $cn->query($sqlLogin);
    $error = $cn->error;
    if($result->num_rows > 0){
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
 }
?>
<div class="row">
  <div class="col">
      <div class="card-header text-center">
        <h3 class="card-title">Iniciar sesión</h3>
      </div>
      <div class="card-body text-center">
          <form action="login.php" method="POST">                   
              <?php echo $error; ?>
              <div class="form-group">
                  <label for="cuentauser">Usuario</label>
                  <input type="text" class="form-group"
                    placeholder="Nombre de usuario"
                    name="cuentauser" id="cuentauser"
                    value="<?php echo $cuenta; ?>">
              </div>  
              <div class="form-group">
                  <label for="pass">Contraseña</label>
                  <input type="password" class="form-group" 
                    placeholder="Ingrese contraseña"                
                    title="Ingrese contraseña"                
                    name="pass" id="pass">
              </div>    
              <button type="submit" class="btn btn-primary" id="ingresar" name="ingresar">
                Ingresar
              </button>
          </form>
      </div>

  </div>
</div>  

<?php
        require_once "../includes/footer.php";
?>
