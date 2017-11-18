@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-md-12">
		<h3>Administración de personas <a href="persona/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

	<div class="row">
		<div class="col-md-12">
			@include('almacen.persona.search')
		</div>
	</div>

<div class="row">
	<div class="col-md-12">
		<div class="table-responsive"></div>
		<table class="table table-striped table">
			<thead>
			
				<th>Tipo de persona</th>
				<th>Nombre</th>
				<th>Tipo de documento</th>
				<th>Numero del documento</th>
				<th>Dirrecion</th>
				<th>Telefono</th>
				<th>Correo electronico</th>
				<th>Opciones</th>
			</thead>
				@foreach ($persona as $per)
		<tr>
			
			<td>{{$per ->tipo_persona}}</td>
			<td>{{$per ->nombre}}</td>
			<td>{{$per ->tipo_documento}}</td>	
			<td>{{$per ->num_documento}}</td>
			<td>{{$per ->direccion}}</td>	
			<td>{{$per ->telefono}}</td>	
			<td>{{$per ->email}}</td>	
			<td>
				<a href="{{URL::action('PersonaController@edit',$per->idpersona)}}">
				<button class="btn btn-primary">Editar</button>
				</a>
				<a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal">
				<button class="btn btn-danger">Eliminar</button>
			</a>
			</td>
		</tr>
		@include('almacen.persona.modal')
		@endforeach


			
		</table>
	</div>
	{{$persona ->render()}}
</div>
</div>


@endsection