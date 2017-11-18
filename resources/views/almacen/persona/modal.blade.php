<div class="modal" role="dialog" tabindex="1" id="modal-delete-{{$per->idpersona}}">

	{!!Form::open(array('action'=>array('PersonaController@destroy',$per->idpersona),'method'=> 'delete'))!!}
	
<div class="modal-dialog">
	
	<div class="modal-content">
			<div class="header">
				<button type="butt" class="close" data-dismiss="modal" arial-label="close"><span arian-hidden="true">X</span></button>
				<h4 class="modal-title">Eliminar Persona: {{$per->nombre}}</h4>
			</div>

				<div class="modal-body">
					<p>¿Esta Seguro de eliminar la persona</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger">Confirmar</button>
				</div>


	</div>

</div>

{!!Form::close()!!}
</div>