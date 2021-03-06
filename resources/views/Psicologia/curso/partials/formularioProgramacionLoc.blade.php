<div class="row">
    	<div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="dependencia">Dependencia</label>
              <select name="dependencia" class="form-control">
	            		<option :value="sucursal.nombre" v-for="sucursal in sucursales" v-model="delegacionActual">
                    @{{ sucursal.nombre }}
                  </option>
            	</select>
            </div>
    	</div>
      <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="imparte">Imparte</label>
            	<input type="text" name="imparte" required value="{{old('imparte')}}" class="form-control" placeholder="Nombre..." style="text-transform: uppercase;" v-model="imparte">

            </div>
    	</div>
      <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="fecha">Fecha</label>
            	<input type="date" name="fecha" required value="{{old('fecha')}}" class="form-control" placeholder="Nombre..." style="text-transform: uppercase;" v-model="fecha">

            </div>
    	</div>
      <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="numeroElementos">Numero de Elementos</label>
            	<input type="number" name="numeroElementos" required value="{{old('fecha')}}" class="form-control" placeholder="Numero" style="text-transform: uppercase;" v-model="numero">

            </div>
    	</div>
</div>
<input type="submit" name="" value="cargar elementos" v-on:click.prevent="busquedaElementoTux()">
