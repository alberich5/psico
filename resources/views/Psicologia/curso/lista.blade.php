@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<center><h3>listar Elementos</h3></center>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<div id="sucursal">
		<div class="col-xs-5">
			<ul v-for="elemento in elementos">
				<li>@{{ elemento}}</li>
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
		this.mostrarElementos();
	},
	data: {
		elementos: ['elemento1','elemento2','elemento3','elemento4']
	},
	methods: {
		mostrarElementos: function() {
			var urlMostrarElementos = 'mostrarElementos';
			axios.get(urlMostrarElementos).then(response => {
				this.elementos = response.data
			});
		}
	}
});
</script>
@endsection
