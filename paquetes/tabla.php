<?php 
require_once "../bd/conexion.php";
$cn = conexion();

$sqlSelect = "SELECT * FROM paquetes";
$resultSet = $cn->query($sqlSelect);

?>
<div>
<table class="table table-condensed table-bordered" id="miTablaPaquete">
<thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>COSTO</th>  
        <th>EDITAR</th>  
        <th>ELIMINAR</th>  
    </tr>
</thead>
<tbody>
    <?php while($row = $resultSet->fetch_assoc()){?>
<tr>
    <td><?php echo $row['idpaquete'] ?></td>
    <td><?php echo $row['nombre_paq'] ?></td>
    <td><?php echo $row['descripcion_paq'] ?></td>
    <td><?php echo $row['costo_paq'] ?></td>      
    <td>
    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarpaquete"
    onclick="DatosUpdatePaquete(
    '<?php echo $row['idpaquete'] ?>',
    '<?php echo $row['nombre_paq'] ?>', 
    '<?php echo $row['descripcion_paq'] ?>',
    '<?php echo $row['costo_paq'] ?>'   
    )">
    <i class="fa fa-pen" aria-hidden="true"></i>
    </span>
    </td>
    <td>
    <span class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarpaquete" 
    onclick="DatosDeletePaquete(     
     '<?php echo $row['idpaquete'] ?>'      
    )">
    <i class="fa fa-trash" aria-hiden="true"></i>
    </span>
    </td>
</tr>
<?php } ?>
    
</tbody>
</table>
</div>

<script>
    $(document).ready( function () {
        $('#miTablaPaquete').DataTable({
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
