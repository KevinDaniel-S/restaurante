<?php 
require_once "./bd/conexion.php";

session_start();

$cn = conexion();
$id = $_SESSION['id'];
$sqlSelect = "SELECT  r.idreservacion, r.fecha_res, r.hora_res,
                r.cantidad_res, r.idusuario, 
                pa.nombre_paq, pa.costo_paq, pa.idpaquete                       
                FROM reservacion r
                INNER JOIN paquetes pa ON r.idpaquete = pa.idpaquete
                WHERE r.idusuario = $id";
$resultSet = $cn->query($sqlSelect);

?>
<div>
<?php echo $cn->error; ?>
<table class="table table-condensed table-bordered" id="miTabla">
<thead>
    <tr>
        <th>Id reservación</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Cantidad de mesas</th>
        <th>Nombre del paquete</th>
        <th>Costo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
</thead>
<tbody>
    <?php while($row = $resultSet->fetch_assoc()){  ?>
<tr>
    <td><?php echo $row['idreservacion']; ?></td>
    <td><?php echo $row['fecha_res']; ?></td>
    <td><?php echo $row['hora_res']; ?>
    <td><?php echo $row['cantidad_res'] ?></td>
    <td><?php echo $row['nombre_paq'] ?></td>
    <td><?php echo $row['costo_paq'] ?></td>    
    <td>
    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarforma"
    onclick="DatosUpdate(
    '<?php echo $row['idreservacion'] ?>',
    '<?php echo $row['fecha_res'] ?>',
    '<?php echo $row['hora_res'] ?>',
    '<?php echo $row['cantidad_res'] ?>',
    '<?php echo $row['idpaquete'] ?>'   
    )">
    <i class="fa fa-pen" aria-hidden="true"></i>
    </span>
    </td>
    <td>
    <span class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarforma" 
    onclick="DatosDelete(     
     '<?php echo $row['idreservacion'] ?>'      
    )">
    <i class="fa fa-trash" aria-hiden="true"></i>
    </span>
    </td>
</tr>
<?php  }?>
    
</tbody>
</table>
</div>

<script>
    $(document).ready( function () {
        $('#miTabla').DataTable({
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
