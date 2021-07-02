<div class="modal fade" id="editarforma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MODIFICAR RESERVACION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmupdate">
            <div class="form-group">
                <label for="idpedidoupd">ID PEDIDO </label>
                <input type="text" class="form-group" 
                placeholder="00000" pattern="[0-9]{1,5}"
                title="El formato es 5 digitos"  
                readonly          
                name="idpedidoupd" id="idpedidoupd">
            </div> 
            <div class="form-group">
                <label for="fechaupd">FECHA </label>
                <input type="datetime" class="form-group" 
                placeholder="YYYY-MM-DD HH:MM"                
                min="2021-06-08 08:00-08:00"
                title="El formato es DD-MM-YYYY"                
                name="fechaupd" id="fechaupd">
            </div>                 
            <div class="form-group">
                <label for="cantidadupd">CANTIDAD </label>
                <input type="text" class="form-group" 
                placeholder="Cantidad de mesas a reservar"
                title="Cantidad de mesas a reservar"                
                name="cantidadupd" id="cantidadupd">
            </div>     
            <div class="form-group">
                <label for="paqueteupd">PAQUETE </label>
                <input type="text" class="form-group" 
                placeholder="El paquete a comprar"
                title="Paquete a comprar"                
                name="paqueteupd" id="paqueteupd">
            </div>                                                       
        </form>
        <div id="datosupdproducto"></div>
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btneditarregistro">MODIFICAR RESERVACION</button>
      </div>
    </div>
  </div>
</div>

<script>
  $("#datosupdproducto").load("tabla.php");    
</script>
