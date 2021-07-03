<?php
$tituloPagina = "Usuarios";
include_once "../includes/header.php";
include_once "../includes/navbar.php";

if(!$_SESSION['logged'] || $_SESSION['puesto']!=2){
  header("Location: ../index.php");
}

?>
<div class="container">
  <div class="row">
      <div class="col">
          <div class="card">
              <div class="card-header text-center">
                  <h3 class="card-title">Administración de usuarios</h3>                
              </div>
              <div class="card-body">
                <h5 class="text-center">Usuarios</h5>
                <span class="btn btn-warning" data-toggle="modal" data-target="#insertarusuario">
                  USUARIO
                  <i class="fa fa-plus" aria-hidden="true"></i>
                </span>
                <hr>
              <div id="datoUsuario"></div> 
          </div>
      </div>
  </div>
</div>

<?php 

include_once "./insertar.php";
include_once "./editar.php";
include_once "./eliminar.php";
include_once "../includes/footer.php";

?>

<script>
 $(document).ready(function(){
        $("#dataTabla").load("../tabla.php");    
        $("#datoPaquete").load("../tablaPaquete.php");        
        $("#datoUsuario").load("../tablaUsuario.php");  
        //INSERCCION USUARIO
        $("#btninsertarusuario").click(function(){                              
                datos = $("#frminsertarusuario").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/insertar.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                     
                                        $("#user").val("");                                        
                                        $("#puesto").val("");                                        
                                        $("#pass").val("");                                        
                                        $("#datoUsuario").load("tablaUsuario.php");                                                                                                                                     
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");                                        
                                } else {                                    
                                        alertify.error("LA FECHA SE ENCUENTRA OCUPADA O HUBO PROBLEMAS CON EL REGISTRO");
                                }
                        }
                });
        });

        // EDITAR USUARIO
        $("#btneditarusuario").click(function(){
                datos = $("#frmupdateusuario").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url:  "controladores/editar.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#id").val("");
                                        $("#usuario").val("");                                        
                                        $("#puesto").val("");                                        
                                        $("#pass").val("");                                        
                                        $("#datoUsuario").load("tablaUsuario.php");
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");                                                                              
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
                                }
                        }
                });
        });
        // ELIMINAR USUARIO
        $("#btneliminarusuario").click(function(){
                datos = $("#frmdelusuario").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url:  "controladores/eliminar.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#idusuariodel").val("");                                                                       
                                        $("#datoUsuario").load("tablaUsuario.php");
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");                                                                              
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
  $("#id").val(idusuario);
  $("#usuario").val(nombre); 
  $("#puesto").val(cuenta);  
  $("#pass").val(password);
}   

function DatosDeleteUsuario(idusuario){
  $("#idusuariodel").val(idusuario); 
}

</script>

