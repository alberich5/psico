@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<div id="sucursal">
	<div class="col-xs-8" style="background-color: yellow">
		@include('Psicologia.curso.partials.formularioProgramacionLoc')
		
	<div class="col-xs-5">
			<ul v-for="sucursal in sucursales">
				<li>@{{ sucursal.nombre_sucursal}}</li>
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
	el: '#sucursal',
	created: function() {
		this.mostrarSucursales();
	},
	data: {
		sucursales: [],
		delegacionActual:''
	},
	methods: {
		mostrarSucursales: function() {
			var urlSucursal = 'sucursal';
			axios.get(urlSucursal).then(response => {
				this.sucursales = response.data
			});
		}
	}
});
</script>
@endsection
