<?php 
require_once "./bd/conexion.php";
$cn = conexion();

$sqlSelect = "SELECT * FROM usuarios";
$resultSet = $cn->query($sqlSelect);
$puesto = array(0 => "Cliente", 1 => "Empleado", 2 => "Administrativo");
?>
<div>
<table class="table table-condensed table-bordered" id="miTabla">
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Password</th>  
        <th>Editar</th>
        <th>Eliminar</th>  
    </tr>
</thead>
<tbody>
    <?php while($row = $resultSet->fetch_assoc()){?>
<tr>
    <td><?php echo $row['idusuario'] ?></td>
    <td><?php echo $row['nombre_us'] ?></td>
    <td><?php echo $puesto[$row['puesto_us']]?></td>
    <td><?php echo $row['password_us'] ?></td>   
    <td>
    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarusuario"
    onclick="DatosUpdateUsuario(
    '<?php echo $row['idusuario'] ?>',
    '<?php echo $row['nombre_us'] ?>', 
    '<?php echo $row['puesto_us'] ?>',
    '<?php echo $row['password_us'] ?>'   
    )">
    <i class="fa fa-pen" aria-hidden="true"></i>
    </span>
    </td>
    <td>
    <span class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarusuario" 
    onclick="DatosDeleteUsuario(     
     '<?php echo $row['idusuario'] ?>'      
    )">
    <i class="fa fa-trash" aria-hiden="true"></i>
    </span>
    </td>   
</tr>
<?php } ?>
    
</tbody>
</table>
</div>
