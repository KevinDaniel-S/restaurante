<div class="modal fade" id="editarpaquete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MODIFICAR PAQUETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmupdatepaquete">
            <div class="form-group">
                <label for="idpaqueteupd">ID PAQUETE </label>
                <input type="text" class="form-group" 
                placeholder="ID del paquete"
                title="ID del paquete"  
                readonly          
                name="idpaqueteupd" id="idpaqueteupd">
            </div> 
            <div class="form-group">
                <label for="nombreupd">NOMBRE DEL PAQUETE </label>
                <input type="text" class="form-group" 
                placeholder="Nombre del paquete"                
                title="Nombre del paquete"                
                name="nombreupd" id="nombreupd">
            </div>                
            <div class="form-group">
                <label for="descripciondupd">DESCRIPCION </label>
                <input type="text" class="form-group" 
                placeholder="Descripcion del paquete"                
                title="Descripcion del paquete"                
                name="descripcionupd" id="descripcionupd">
            </div>  
            <div class="form-group">
                <label for="costoupd">COSTO </label>
                <input type="text" class="form-group" 
                placeholder="El costo del paquete"                
                title="El costo del paquete"                
                name="costoupd" id="costoupd">
            </div>                                                     
        </form>
        
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btneditarpaquete">MODIFICAR PAQUETE</button>
      </div>
    </div>
  </div>
</div>

