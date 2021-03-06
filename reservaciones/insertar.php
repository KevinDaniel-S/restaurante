<div class="modal fade" id="insertarforma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR NUEVA RESERVACION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frminsertar">      
            <div class="form-group">
                <label for="fechains">FECHA </label>
                <input type="date" class="form-group" 
                title="El formato es YYYY-MM-DD"      
                name="fechains" id="fechains" required>
            </div>               
            <div class="form-group">
                <label for="hora">Hora (10:00-23:00)</label>
                <input type="time" class="form-group"
                min="10:00" max="23:00"
                name="hora" id="hora" required>
            </div>
            <div class="form-group">
                <label for="cantidadins">CANTIDAD </label>
                <input type="text" class="form-group" 
                placeholder="Cantidad de mesas a reservar"                
                title="Cantidad de mesas a reservar"                
                name="cantidadins" id="cantidadins" required>
            </div>  
            <div class="form-group">
                <label for="paqueteins">PAQUETE </label>
                <input type="text" class="form-group" 
                placeholder="El paquete a comprar"                
                title="Paquete a comprar"                
                name="paqueteins" id="paqueteins" required>
            </div>                                        
        </form>
        <div id="datosproducto"></div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btninsertarregistro" data-dismiss="modal">AGREGAR RESERVACION</button>
      </div>
    </div>
  </div>
</div>

<script>
  $("#datosproducto").load("tabla.php");    
</script>
