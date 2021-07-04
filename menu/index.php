<?php
$tituloPagina = "Menu";
include_once "../includes/header.php";
include_once "../includes/navbar.php";
?>

<div class="container">
  <div class="row">
      <div class="col">
          <div class="card">
              <div class="card-header text-center">
                  <h3 class="card-title">Menu</h3>                
              </div>
              <div class="card-body">
                  <h5 class="text-center">Menu</h5>
                  <?php if($_SESSION['puesto']>0){ ?>
                  <span class="btn btn-success" data-toggle="modal" data-target="#insertarItem">
                      Agregar item
                      <i class="fa fa-plus" aria-hidden="true"></i>
                  </span>
                  <hr>
                  <?php } ?>
                  <div id="datoItem"></div>     
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
        $("#datoItem").load("tabla.php");        
        //INSERCCION Item
        $("#btninsertarItem").click(function(){                              
                datos = $("#frminsertarItem").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/insertar.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                     
                                        $("#nombre").val("");                                        
                                        $("#tamanio").val("");                                        
                                        $("#tipo").val("");
                                        $("#precio").val("");
                                        $("#datoItem").load("tabla.php");
                                        $("#dataTabla").load("../tabla.php");                                          
                                        location.reload();                                       
                                        alertify.success("EL REGISTRO SE AGREGO A LA BASE DE DATOS");                                        
                                } else {                                    
                                        alertify.error(respuesta);
                                }
                        }
                });
        });
        // EDITAR Item
        $("#btneditarItem").click(function(){
                datos = $("#frmupdateItem").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url:  "controladores/editar.php",
                        success: function(respuesta){
                                if(respuesta == 1){
                                        $("#id").val("");
                                        $("#nombre").val("");                                        
                                        $("#tamanio").val("");                                        
                                        $("#tipo").val("");
                                        $("#precio").val("");
                                        $("#datoItem").load("tabla.php");
                                        $("#dataTabla").load("../tabla.php");                                          
                                        location.reload(); 
                                        alertify.success("EL REGISTRO SE ACTUALIZO A LA BASE DE DATOS");                                                                              
                                } else {
                                        alertify.error(respuesta);
                                }
                        }
                });
        });
 // ELIMINAR Item

                 $("#btneliminarItem").click(function(){
                datos = $("#frmdelItem").serialize();
                $.ajax({
                        type: "POST",
                        data: datos,
                        url: "controladores/eliminar.php",
                        success: function(respuesta){
                                if(respuesta == 1){                                
                                        $("#idItemdel").val("");   
                                        $("#datoItem").load("tabla.php");
                                        location.reload(); 
                                        alertify.success("EL REGISTRO SE ELIMINO DE LA BASE DE DATOS");                                        
                                } else {
                                        alertify.error("HUBO PROBLEMAS CON LA PETICION");
                                }
                        }
                });
        });

});

function DatosUpdateItem(idItem, nombre, tamanio, tipo, precio){
  $("#idU").val(idItem);
  $("#nombreU").val(nombre);
  $("#tamanioU").val(tamanio);
  $("#tipoU").val(tipo);
  $("#precioU").val(precio);
}   

function DatosDeleteItem(idItem){
  $("#idItemdel").val(idItem); 
}

</script>
