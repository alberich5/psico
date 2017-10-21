@extends('capacitacion.plantillacapacitacion')

@section('capacitacion')
	<div id="dependencia">
		<div class="col-xs-5">
			<ul v-for="dependencia in dependencias">
				<li>@{{ dependencia.nombre_dependencia}}</li>
			</ul>
			<ul v-for="institucion in instituciones">
				<li>@{{ institucion.nombre_institucion_capacitadora}}</li>
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
	el: '#dependencia',
	created: function() {
		this.mostrarDependencias();
		this.mostrarInstituciones();
	},
	data: {
		dependencias: [],
		instituciones: []
	},
	methods: {
		mostrarDependencias: function() {
			var urlDependencia = 'dependencia';
			axios.get(urlDependencia).then(response => {
				this.dependencias = response.data
			});
		},
		mostrarInstituciones: function() {
			var urlInstitucion = 'institucion';
			axios.get(urlInstitucion).then(response => {
				this.instituciones = response.data
			});
		}
	}
});
</script>
@endsection
