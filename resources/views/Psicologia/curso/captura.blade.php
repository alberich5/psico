@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<div id="app">
	<div class="col-xs-8" >
		@include('Psicologia.curso.partials.formularioProgramacionLoc')
		<br>
		@include('Psicologia.curso.partials.tabla')

		@include('Psicologia.curso.partials.modalBuscar')


		<div class="col-xs-5">
			<ul v-for="sucursal in sucursales">
				<li>@{{ sucursal.nombre }}</li>
			</ul>
		</div>

		<div class="col-xs-7">
        	<pre>@{{$data}}</pre>
    	</div>

</div>



@endsection
@section('js')
<script>
	new Vue({
	el: '#app',
	created: function() {
		this.mostrarSucursal();
		this.mostrarDependencias();
	},
	data: {
		sucursales: [],
		instituciones: [],
		delegacionActual:'',
		imparte:'',
		fecha:''
	},
	methods: {
		mostrarSucursal: function(){
			var urlSucursales = 'sucursal';
			axios.get(urlSucursales).then(response => {
				this.sucursales = response.data
				toastr.success('Sucursales buscadas');
			});


		},
		mostrarInstitucione: function(){
			var urlInstitucion = 'institucion';
			axios.get(urlInstitucion).then(response => {
				this.instituciones = response.data
				toastr.success('Instituciones encontradas');
			});


		},
		mostrarDependencias: function(){
			toastr.info('entro a mostrar depencias');
		},
		mostrarModal: function(){
			$('#mocalbuscar').modal('show');
			toastr.info('mostrar Modal');
		}
	}
});
</script>
@endsection
