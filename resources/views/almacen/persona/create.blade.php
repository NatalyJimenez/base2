@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Persona </h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			{!!Form::open(array('url'=>'almacen/persona','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_persona">Tipo de persona</label>
            	<input type="text" name="tipo_persona" required value="{{old('tipo_persona')}}" class="form-control" placeholder="Tipo de persona...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_documento">Tipo de documento</label>
            	<input type="text" name="tipo_documento" required value="{{old('tipo_documento')}}" class="form-control" placeholder="Tipo de documento...">
            </div>
    	</div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="num_documento">Numero del documento</label>
                <input type="text" name="num_documento" required value="{{old('num_documento')}}" class="form-control" placeholder="numero del documento...">
            </div>
        </div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="direccion">Direccion</label>
            	<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Direccion...">
            </div>
    	</div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Telefono...">
            </div>
        </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Correo electronico...">
            </div>
        </div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>
    </div>
            
            
            

			{!!Form::close()!!}		

@endsection