<div class="modal fade" id="editarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MODIFICAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmupdateusuario">
            <div class="form-group">
                <label for="id">ID USUARIO </label>
                <input type="text" class="form-group" 
                placeholder="ID del paquete"
                title="ID del paquete"  
                readonly          
                name="id" id="id">
            </div> 
            <div class="form-group">
                <label for="usuario">NOMBRE DEL USUARIO </label>
                <input type="text" class="form-group" 
                placeholder="Nombre del usuario"                
                title="Nombre del usuario"                
                name="usuario" id="usuario">
            </div>                
            <div class="form-group">
              <label for="puesto">Puesto </label>
              <select name="puesto" id="pusto">
                <option value="0">Cliente</option>
                <option value="1">Empleado</option>
                <option value="2">Administrativo</option>
              </select>
            </div> 
            <div class="form-group">
                <label for="pass">CONTRASEÑA </label>
                <input type="password" class="form-group" 
                placeholder="Contraseña del usuario"                
                title="Contraseña del usuario"                
                name="pass" id="pass">
            </div>                                                       
        </form>
        
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btneditarusuario">MODIFICAR USUARIO</button>
      </div>
    </div>
  </div>
</div>

