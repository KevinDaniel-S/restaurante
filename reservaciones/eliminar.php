<div class="modal fade" id="eliminarforma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR RESERVACION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmdelete">
            <div class="form-group">
                <label for="idpedidodel">ID DEL PEDIDO A ELIMINAR</label>
                <input type="text" class="form-group" 
                placeholder="00000" pattern="[0-9]{1,5}"
                title="El formato es 5 digitos"  
                readonly
                name="idpedidodel" id="idpedidodel">
            </div>                                              
        </form>
        <p class="text-center">¿Esta seguro que desea ejecutar la siguiente acción? 
            Para el ID RESERVACION. Si hace esto no podra recuperar la información.</p>       
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-danger" data-dismiss="modal" >CANCELAR</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btneliminarregistro">ELIMINAR RESERVACION</button>
  
      </div>
    </div>
  </div>
</div>