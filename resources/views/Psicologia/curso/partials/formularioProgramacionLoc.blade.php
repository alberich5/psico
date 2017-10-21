

<fieldset>

<!-- Form Name -->
<legend>ProgramacionLoc</legend>

<!-- listado de delagaciones -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Delegacion</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" v-model="delegacionActual" >
      <option v-for="sucursal in sucursales" >
      @{{ sucursal.nombre_sucursal}}
      </option>
    </select>
  </div>
</div>
</div>


<!-- Nombre la persona que imparte-->

<div class="form-group">
  <label class="col-md-4 control-label" >Imparte</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Imparte" class="form-control"  type="text">
    </div>
  </div>
</div>



</fieldset>

</div>
<!-- /.container -->