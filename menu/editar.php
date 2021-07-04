<div class="modal fade" id="editarItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmupdateItem">
            <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-group"
                  placeholder="Id del Item"
                  name="id" id="idU">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del Item </label>
                <input type="text" class="form-group" 
                placeholder="Nombre del Item"                
                title="Nombre del Item"                
                name="nombre" id="nombreU">
            </div>                
            <div class="form-group">
                <label for="tamanio">Tamaño</label>
                <input type="text" class="form-group" 
                placeholder="Tamaño del Item"                
                title="Tamaño del Item"                
                name="tamanio" id="tamanioU">
            </div>  
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-group" 
                placeholder="El tipo del Item"                
                title="El tipo del Item"                
                name="tipo" id="tipoU">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-group"
                placeholder="Precio del item"
                title="Precio del item"
                name="precio" id="precioU">
            </div>
        </form>
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btneditarItem">Modificar Item</button>
      </div>
    </div>
  </div>
</div>

