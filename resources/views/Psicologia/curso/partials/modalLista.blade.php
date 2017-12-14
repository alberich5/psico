<div class="modal fade" id="modalLista">
	<div class="modal-dialog" id="mdialTamanio">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
        <center><h4>Agregar Nuevos Elementos Policiales con fecha <?php echo  date('d') . ' del ' . date('m') . ' de ' . date('Y');?></h4></center>
			</div>
			<div class="modal-body">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Fotografia</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Rfc</th>
            <th scope="col">Genero</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Edad</th>
            <th scope="col">Delegacion</th>
          </tr>
        </thead>
        <tbody>
          <tr  v-for="elemento in elementos">
            <th scope="row">717</th>
            <td><img src="{{ asset('img/1.png') }}" width="80px"> </td>
            <td>@{{ elemento.id }}</td>
            <td>marft</td>
            <td>Mark</td>
            <td>jui</td>
            <td>marft</td>
            <td>htth</td>
            <td>grg</td>
          </tr>
        </tbody>
      </table>

			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>
</div>
