<?php
$tituloPagina = "Paquetes";
include_once "../includes/header.php";
include_once "../includes/navbar.php";

if(!$_SESSION['logged'] || $_SESSION['puesto']==0){
  header("Location: ../index.php");
}
?>

<h1>Paquetes</h1>

<div class="container">
  <div class="row">
      <div class="col">
          <div class="card">
              <div class="card-header text-center">
                  <h3 class="card-title">RESERVACION DE MESA</h3>                
              </div>
              <div class="card-body">
                  <h5 class="text-center">PAQUETES</h5>
                  <span class="btn btn-success" data-toggle="modal" data-target="#insertarpaquete">
                      PAQUETE
                      <i class="fa fa-plus" aria-hidden="true"></i>
                  </span>
                  <hr>
                  <div id="datoPaquete"></div>     
              </div> 
          </div>
      </div>                
  </div>

<?php include_once "./insertar.php"; ?>
<?php include_once "./editar.php"; ?>
<?php include_once "./eliminar.php"; ?>
<?php include_once "../includes/footer.php";?>

<script>
$(document).ready(function(){
        $("#dataTabla").load("../tabla.php");    
        $("#datoPaquete").load("tabla.php");        
        //INSERCCION PAQUETE
        $("#btninsertarpaquete").click(function(){                              
                datos = $("#frminsertarpaquete").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/insertar.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                     
                                        $("#nombreins").val("");                                        
                                        $("#descripcionins").val("");                                        
                                        $("#costoins").val("");                                        
                                        $("#datoPaquete").load("tabla.php");
                                        $("#dataTabla").load("../tabla.php");                                          
                                        location.reload();                                       
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");                                        
                                } else {                                    
                                        alertify.error(respuesta);
                                }
                        }
                });
        });
        // EDITAR PAQUETE
        $("#btneditarpaquete").click(function(){
                datos = $("#frmupdatepaquete").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url:  "controladores/editar.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#idpaqueteupd").val("");
                                        $("#nombreupd").val("");                                        
                                        $("#descripcionupd").val("");
                                        $("#costoupd").val("");                                          
                                        $("#datoPaquete").load("tabla.php");
                                        $("#dataTabla").load("../tabla.php");                                          
                                        location.reload(); 
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");                                                                              
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
                                }
                        }
                });
        });
 // ELIMINAR PAQUETE

                 $("#btneliminarpaquete").click(function(){
                datos = $("#frmdelpaquete").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/eliminar.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                
                                        $("#idpaquetedel").val("");   
                                        $("#datoPaquete").load("tabla.php");
                                        $("#dataTabla").load("../tabla.php");                                          
                                        location.reload(); 
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
