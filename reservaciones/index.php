<?php
$tituloPagina = "Reservacion";
include_once "../includes/header.php";
include_once "../includes/navbar.php";

if(!$_SESSION['logged'] || $_SESSION['puesto']!=0){
  header("Location: ../index.php");
}
?>

<div class="container">
  <div class="row">
      <div class="col">
          <div class="card">
              <div class="card-header text-center">
                  <h3 class="card-title">RESERVACION DE MESA</h3>                
              </div>
          <div class="card-body">
              <h5 class="text-center">RESERVACIONES</h5>
              <span class="btn btn-primary" data-toggle="modal" data-target="#insertarforma">
                  RESERVAR
                  <i class="fa fa-plus" aria-hidden="true"></i>
              </span>
                      
              <hr>                                                    
              <div id="dataTabla"></div>
          </div> 
      </div>
  </div>                
</div>
        <?php require_once "./insertar.php"; ?>
        <?php require_once "./editar.php"; ?>
        <?php require_once "./eliminar.php"; ?>

<script>
 $(document).ready(function(){
        $("#dataTabla").load("../tabla.php");    
        $("#datoPaquete").load("./tabla.php");        
        $("#datoUsuario").load("../tablaUsuario.php");  
        //INSERCCION REGISTRO
        $("#btninsertarregistro").click(function(){                              
                datos = $("#frminsertar").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/insertar.php",
                        success: function(respuesta){
                                if(respuesta == 200){                                     
                                        $("#idreservacionins").val("");                                        
                                        $("#fechains").val("");                                        
                                        $("#cantidadins").val("");
                                        $("#paqueteins").val("");
                                        $("#dataTabla").load("../tabla.php");
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");
                                } else {                                    
                                        alertify.error(respuesta);
                                }
                        }
                });
        });
       // EDITAR REGISTRO
        $("#btneditarregistro").click(function(){
                datos = $("#frmupdate").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url:  "controladores/editar.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#idpedidoupd").val("");
                                        $("#fechaupd").val("");                                        
                                        $("#cantidadupd").val("");
                                        $("#paqueteupd").val("");                                        
                                        $("#dataTabla").load("../tabla.php");
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
                                }
                        }
                });
        });
       // ELIMINAR REGRISTRO
        $("#btneliminarregistro").click(function(){
                datos = $("#frmdelete").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/eliminar.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                
                                        $("#idpedidodel").val("");
                                        $("#dataTabla").load("../tabla.php");
                                        alertify.success("EL REGISTRO SE ELIMINO DE LA BASE DE DATOS");
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
                                }
                        }
                });
        });
});
       

 function DatosUpdate(idpedido, fecha, cantidad,idpaquete){
  $("#idpedidoupd").val(idpedido);
  $("#fechaupd").val(fecha); 
  $("#cantidadupd").val(cantidad);  
  $("#paqueteupd").val(idpaquete);
}   

function DatosDelete(idpedido){
  $("#idpedidodel").val(idpedido); 
}

function DatosUpdatePaquete(idpaquete, nombre, descripcion,costo){
  $("#idpaqueteupd").val(idpaquete);
  $("#nombreupd").val(nombre); 
  $("#descripcionupd").val(descripcion);  
  $("#costoupd").val(costo);
}   

function DatosDeletePaquete(idpaquete){
  $("#idpaquetedel").val(idpaquete); 
}
function DatosUpdateUsuario(idusuario, nombre, cuenta, password){
  $("#idusuarioupd").val(idusuario);
  $("#nombreusupd").val(nombre); 
  $("#cuentaupd").val(cuenta);  
  $("#passupd").val(password);
}   

function DatosDeleteUsuario(idusuario){
  $("#idusuariodel").val(idusuario); 
}

</script>



<?php
include_once "../includes/footer.php";
?>
