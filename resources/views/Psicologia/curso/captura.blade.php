@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<div id="app">
	<div class="col-xs-8" >
		@include('Psicologia.curso.partials.formularioProgramacionLoc')
		<br>
		@include('Psicologia.curso.partials.tabla')

		@include('Psicologia.curso.partials.modalBuscar')


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
		delegacionActual:'',
		imparte:'',
		fecha:''
	},
	methods: {
		mostrarSucursal: function(){
			toastr.success('entro a mostrar sucursales');
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
