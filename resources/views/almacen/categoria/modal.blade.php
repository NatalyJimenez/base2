<div class="modal" role="dialog" tabindex="1" id="modal-delete-{{$cat->idcategoria}}">

	{!!Form::open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria),'method'=> 'delete'))!!}
	
<div class="modal-dialog">
	
	<div class="modal-content">
			<div class="header">
				<button type="butt" class="close" data-dismiss="modal" arial-label="close"><span arian-hidden="true">X</span></button>
				<h4 class="modal-title">Eliminar Categoria: {{$cat->nombre}}</h4>
			</div>

				<div class="modal-body">
					<p>¿Esta Seguro de eliminar la categoria</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger">Confirmar</button>
				</div>


	</div>

</div>

{!!Form::close()!!}
</div>