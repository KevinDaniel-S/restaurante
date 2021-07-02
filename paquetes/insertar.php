<div class="modal fade" id="insertarpaquete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR NUEVO PAQUETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frminsertarpaquete">               
            <div class="form-group">
                <label for="nombreins">NOMBRE DEL PAQUETE </label>
                <input type="text" class="form-group" 
                placeholder="Nombre del paquete"                
                title="Nombre del paquete"                
                name="nombreins" id="nombreins">
            </div>                
            <div class="form-group">
                <label for="descripciondins">DESCRIPCION </label>
                <input type="text" class="form-group" 
                placeholder="Descripcion del paquete"                
                title="Descripcion del paquete"                
                name="descripcionins" id="descripcionins">
            </div>  
            <div class="form-group">
                <label for="costoins">COSTO </label>
                <input type="text" class="form-group" 
                placeholder="El costo del paquete"                
                title="El costo del paquete"                
                name="costoins" id="costoins">
            </div>                                        
        </form>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btninsertarpaquete" data-dismiss="modal">AGREGAR PAQUETE</button>
      </div>
    </div>
  </div>
</div>

