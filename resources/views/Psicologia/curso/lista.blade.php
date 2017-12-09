@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<center><h3>listar Elementos</h3></center>

<div id="sucursal">
  <div class="panel panel-primary" >
    <div class="panel-heading">
      <h3 class="panel-title">Programacion Loc</h3>
    </div>
    <div class="panel-body">
      @include('Psicologia.curso.partials.lista')
    </div>
  </div>
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
	},
  mostrarPolicias: function(){
    alert("esta funcionando");
  }
});
</script>
@endsection
