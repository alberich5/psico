@extends('Psicologia.plantillaPsicologia')

@section('psicologia')
<div id="app">
	<div class="col-xs-8" >
		@include('Psicologia.curso.partials.formularioProgramacionLoc')
		<br>
		@include('Psicologia.curso.partials.tabla')

		@include('Psicologia.curso.partials.modalBuscar')


		<div class="col-xs-8">
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
		this.busquedaUsuario();
	},
	data: {
		sucursales: [],
		instituciones: [],
		searchUsuario:{id:'',rfc:'',nombre:'',paterno:'',materno:''},
		usuario:{},
		elementosEncontrados: [],
		elementosEncontradosTux: [],
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
		busquedaElemento: function() {
	    //var urlBuscarElemento = 'buscarElemento?delegacion=Pinotepa%20Nacional';
	    var urlBuscarElemento = 'buscarElemento?delegacion=' + this.delegacionActual;
	    axios.get(urlBuscarElemento).then(response => {
	      this.elementosEncontrados = response.data
	    });
	  },


		busquedaElementoTux: function() {
	    //var urlBuscarElemento = 'buscarElemento?delegacion=Pinotepa%20Nacional';

	    var urlBuscarElemento = 'http://localhost:8989/administrador/usuarios';
	    axios.get(urlBuscarElemento).then(response => {

	      this.elementosEncontradosTux = response.data
	    });
	  },
		mostrarUsuario:function()
									 {
									 this.idElemento=document.getElementById('id_usuario_show').value;
									  var urlBuscarElemento = 'buscarElemento';

									 axios.post(url,{
											 usuario:this.idElemento//new keep es e input
									 }).then(response=>{

										//this.permisos=response.data;


										 this.errors=[];//listado de errores
										 //alert(response.data);

									 }).catch(error=>{
										 this.errors=error.response.data

									 });


									 },

	 busquedaUsuario:function()
                    {
                    this.users=[];
                    var url='searchElemento';

                    axios.post(url,{
                        usuario:this.searchUsuario//new keep es e input
                    }).then(response=>{
                    //  alert(response.data.nombre);
                     // this.usuarios=[];

                      //this.users=response.data;

                     this.users=response.data.usuario;
                      //this.tablaPermisos=response.data.permisos;

                      this.errors=[];//listado de errores
                      //alert(response.data);
                      //this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''};
                      this.searchUsuario.id='';
                      this.searchUsuario.rfc='';
                      this.searchUsuario.nombre='';
                      this.searchUsuario.paterno='';
                      this.searchUsuario.materno='';
                        toastr.success('Busqueda exitosa');//mensaje


                        //
                       ///
                    }).catch(error=>{
                      this.errors=error.response.data

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
