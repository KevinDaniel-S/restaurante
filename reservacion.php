<?php 
        $tituloPagina = "Prueba Uno";
        require_once "./includes/header.php";   
        
       
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
              <hr>
              <h5 class="text-center">PAQUETES</h5>
              <span class="btn btn-success" data-toggle="modal" data-target="#insertarpaquete">
                  PAQUETE
                  <i class="fa fa-plus" aria-hidden="true"></i>
              </span>
              <hr>
              <div id="datoPaquete"></div>     
              <hr>
              <h5 class="text-center">USUARIOS</h5>
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
        <?php require_once "./reservaciones/insertarTablaModal.php"; ?>
        <?php require_once "./reservaciones/editarModal.php"; ?>
        <?php require_once "./reservaciones/eliminarModal.php"; ?>
        <?php require_once "./paquetes/insertar.php"; ?>
        <?php require_once "./paquetes/editar.php"; ?>
        <?php require_once "./paquetes/eliminar.php"; ?>
        <?php require_once "./usuarios/insertarTablaModalUsuario.php"; ?>
        <?php require_once "./usuarios/editarModalUsuario.php"; ?>
        <?php require_once "./usuarios/eliminarModalUsuario.php"; ?>
</div>

<script>
 $(document).ready(function(){
        $("#dataTabla").load("tabla.php");    
        $("#datoPaquete").load("tablaPaquete.php");        
        $("#datoUsuario").load("tablaUsuario.php");  
        //INSERCCION REGISTRO
        $("#btninsertarregistro").click(function(){                              
                datos = $("#frminsertar").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "insertarregistro.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                     
                                        $("#idreservacionins").val("");                                        
                                        $("#fechains").val("");                                        
                                        $("#cantidadins").val("");
                                        $("#paqueteins").val("");
                                        $("#dataTabla").load("tabla.php");
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");
                                } else {                                    
                                        alertify.error("LA FECHA SE ENCUENTRA OCUPADA O HUBO PROBLEMAS CON EL REGISTRO");
                                }
                        }
                });
        });
        //INSERCCION PAQUETE
        $("#btninsertarpaquete").click(function(){                              
                datos = $("#frminsertarpaquete").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "insertarregistropaquete.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                     
                                        $("#nombreins").val("");                                        
                                        $("#descripcionins").val("");                                        
                                        $("#costoins").val("");                                        
                                        $("#datoPaquete").load("tablaPaquete.php");
                                        $("#dataTabla").load("tabla.php");                                          
                                        location.reload();                                       
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");                                        
                                } else {                                    
                                        alertify.error("LA FECHA SE ENCUENTRA OCUPADA O HUBO PROBLEMAS CON EL REGISTRO");
                                }
                        }
                });
        });
        //INSERCCION USUARIO
        $("#btninsertarusuario").click(function(){                              
                datos = $("#frminsertarusuario").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "insertarregistrousuario.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                     
                                        $("#nomins").val("");                                        
                                        $("#cuentins").val("");                                        
                                        $("#passins").val("");                                        
                                        $("#datoUsuario").load("tablaUsuario.php");                                                                                                                                     
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");                                        
                                } else {                                    
                                        alertify.error("LA FECHA SE ENCUENTRA OCUPADA O HUBO PROBLEMAS CON EL REGISTRO");
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
                        url:  "editarregistro.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#idpedidoupd").val("");
                                        $("#fechaupd").val("");                                        
                                        $("#cantidadupd").val("");
                                        $("#paqueteupd").val("");                                        
                                        $("#dataTabla").load("tabla.php");
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
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
                        url:  "editarregistropaquete.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#idpaqueteupd").val("");
                                        $("#nombreupd").val("");                                        
                                        $("#descripcionupd").val("");
                                        $("#costoupd").val("");                                          
                                        $("#datoPaquete").load("tablaPaquete.php");
                                        $("#dataTabla").load("tabla.php");                                          
                                        location.reload(); 
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");                                                                              
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
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
                        url:  "editarregistrousuario.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#idusuarioupd").val("");
                                        $("#nombreusupd").val("");                                        
                                        $("#cuentaupd").val("");                                        
                                        $("#passupd").val("");                                        
                                        $("#datoUsuario").load("tablaUsuario.php");
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
                        url: "eliminarregistro.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                
                                        $("#idpedidodel").val("");
                                        $("#dataTabla").load("tabla.php");
                                        alertify.success("EL REGISTRO SE ELIMINO DE LA BASE DE DATOS");
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
                        url: "eliminarregistropaquete.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                
                                        $("#idpaquetedel").val("");   
                                        $("#datoPaquete").load("tablaPaquete.php");
                                        $("#dataTabla").load("tabla.php");                                          
                                        location.reload(); 
                                        alertify.success("EL REGISTRO SE ELIMINO DE LA BASE DE DATOS");                                        
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
                        url:  "eliminarregistrousuario.php",
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
        require_once "./includes/footer.php";
?>
