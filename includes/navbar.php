<nav class="navbar navbar-dark bg-dark navbar-expand-md">
  <div class="container">
      <a class="navbar-brand" href="<?php echo $URI ?>/index.php">Mexicanísimo</a>
      <ul class="navbar-nav w-100 justify-content-start">
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo $URI ?>/menu/index.php">Menú</a>
          </li>
          <?php if($_SESSION['logged'])  {?>
            <?php if($_SESSION['puesto'] == 0) { ?>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $URI ?>/reservaciones/index.php">Reservaciones</a>
              </li>
            <?php } else { ?>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $URI ?>/paquetes/index.php">Paquetes</a>
              </li>
              <?php if($_SESSION['puesto'] == 2){ ?>
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo $URI ?>/usuarios/index.php">Usuarios</a>
                </li>
              <?php } 
            } 
          } ?>
      </ul>
      <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
          <?php if(!$_SESSION['logged']) {?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $URI ?>/account/register.php">Registrarse</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $URI ?>/account/login.php">Iniciar sesión</a>
            </li>
          <?php } else { ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $URI ?>/account/logout.php">Cerrar sesión</a>
            </li>
          <?php } ?>
      </ul>
  </div>
</nav>

