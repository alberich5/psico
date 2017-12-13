


<div class="modal fade" id="show">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" id="modalCabecera">
				<button type="button" class="close" data-dismiss="modal" id="cerrar">
					<span>&times;</span>
				</button>
				<h4 align="center" id="modalEditar">Elemento para Agregar</h4>
          <br>
          <div class="row" v-for="usuario in users" v-if="usuario.id_elemento==idElemento" >
            <div class="col-sm-10 col-sm-offset-1">
            <h5 >@{{"Nombre: "+usuario.nombre +" "+ usuario.apellido_paterno+" "+ usuario.apellido_materno}}</h5>

            
          </div>
          </div>
           
        
          
          <input id="id_usuario_show" type="hidden"  @click="mostrarUsuario">
			</div>
			<div class="modal-body">
           <div class="row" v-for="usuario in users" v-if="usuario.id_elemento==idElemento" >
        <div class="col-sm-10 col-sm-offset-1">
            
            
        
        </div>
      </div>
                      

      </div>
			<div class="modal-footer">
				<input  type="button" class="btn btn-primary" value="Cerrar" data-dismiss="modal">
			</div>
<!--
       <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
 </div>

-->
		</div>
	</div>
</div>
