<?php 
require_once "../bd/conexion.php";
$cn = conexion();

$sqlSelect = "SELECT * FROM paquetes";
$resultSet = $cn->query($sqlSelect);

?>
<div>
<table class="table table-condensed table-bordered" id="miTabla">
<thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>COSTO</th>   
    </tr>
</thead>
<tbody>
    <?php while($row = $resultSet->fetch_assoc()){?>
<tr>
    <td><?php echo $row['idpaquete'] ?></td>
    <td><?php echo $row['nombre_paq'] ?></td>
    <td><?php echo $row['descripcion_paq'] ?></td>
    <td><?php echo $row['costo_paq'] ?></td>      
</tr>
<?php } ?>
    
</tbody>
</table>
</div>
