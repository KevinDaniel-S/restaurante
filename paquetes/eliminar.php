<div class="modal fade" id="eliminarpaquete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR PAQUETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmdelpaquete">
      <div class="form-group">
                <label for="idpaquetedel">ID PAQUETE </label>
                <input type="text" class="form-group" 
                placeholder="ID del paquete"
                title="ID del paquete"  
                readonly          
                name="idpaquetedel" id="idpaquetedel">
            </div>                               
        </form>
        <p class="text-center">¿Esta seguro que desea ejecutar la siguiente acción? 
            Para el ID PAQUETE. Si hace esto no podra recuperar la información.</p>       
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-danger" data-dismiss="modal" >CANCELAR</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btneliminarpaquete">ELIMINAR PAQUETE</button>
  
      </div>
    </div>
  </div>
</div>
