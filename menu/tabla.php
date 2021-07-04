<?php

session_start();
require_once "../bd/conexion.php";
$cn = conexion();

$sqlSelect = "SELECT * FROM menu";
$resultSet = $cn->query($sqlSelect);
?>
<div>
<table class="table table-condensed table-bordered" id="miTablaItem">
<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Tipo</th>  
        <th>Precio</th>
<?php if($_SESSION['puesto']>0){ ?>
        <th>Editar</th>
        <th>Eliminar</th>
<?php } ?>
    </tr>
</thead>
<tbody>
    <?php while($row = $resultSet->fetch_assoc()){?>
<tr>
    <td><?php echo $row['idItem'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['tamanio'] ?></td>
    <td><?php echo $row['tipo'] ?></td>
    <td><?php echo $row['precio'] ?></td>
<?php if($_SESSION['puesto']>0){ ?>
    <td>
    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarItem"
    onclick="DatosUpdateItem(
    '<?php echo $row['idItem'] ?>',
    '<?php echo $row['nombre'] ?>', 
    '<?php echo $row['tamanio'] ?>',
    '<?php echo $row['tipo'] ?>',
    '<?php echo $row['precio'] ?>'
    )">
    <i class="fa fa-pen" aria-hidden="true"></i>
    </span>
    </td>
    <td>
    <span class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarItem" 
    onclick="DatosDeleteItem(     
     '<?php echo $row['idItem'] ?>'      
    )">
    <i class="fa fa-trash" aria-hiden="true"></i>
    </span>
    </td>
<?php } ?>
</tr>
<?php } ?>
    
</tbody>
</table>
</div>

<script>
    $(document).ready( function () {
        $('#miTablaItem').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": " Primero ",
                    "last": " Ultimo ",
                    "next": " Proximo ",
                    "previous": " Anterior  "
                }
            },
            "lengthMenu": [[15, 20, 25, 30, 40, 50, -1], [15, 20, 25, 30, 40,  50, "All"]]            
        });
    } );
</script>    
