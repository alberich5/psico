
new Vue({
	el: '#crud',
	created: function() {
		this.mostrarComentarios();
	},
	data: {
		keeps: [],
		newKeep: '',
		fillKeep: {'id': '', 'keep': ''},
		errors: []
	},
	methods: {
		mostrarComentarios: function() {
			var urlKeeps = 'tasks';
			axios.get(urlKeeps).then(response => {
				this.keeps = response.data
			});
		},
		editarComentario: function(keep) {
			this.fillKeep.id   = keep.id;
			this.fillKeep.keep = keep.keep;
			$('#modalEditar').modal('show');
		},
		actualizarComentario: function(id) {
			var url = 'tasks/' + id;
			axios.put(url, this.fillKeep).then(response => {
				this.getKeeps();
				this.fillKeep = {'id': '', 'keep': ''};
				this.errors	  = [];
				$('#edit').modal('hide');
				toastr.success('Comentario actualizado con éxito');
			}).catch(error => {
				this.errors = error.response.data
			});
		},
		eliminarComentario: function(keep) {
			var url = 'tasks/' + keep.id;
			axios.delete(url).then(response => { //eliminamos
				this.getKeeps(); //listamos
				toastr.success('Eliminado correctamente'); //mensaje
			});
		},
		crearComentario: function() {
			var url = 'tasks';
			axios.post(url, {
				keep: this.newKeep
			}).then(response => {
				this.getKeeps();
				this.newKeep = '';
				this.errors = [];
				$('#create').modal('hide');
				toastr.success('Nuevo Comentario creada con éxito');
			}).catch(error => {
				this.errors = error.response.data
			});
		}
	}
});
















