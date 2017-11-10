{!! Form::open(array('url' => 'admin/categorias-store')) !!}
    <div class="form-group">
		{!! Form::label('nombre' , 'Nombre de la categoria') !!}
		{!! Form::text('nombre' , null ,['class'=> 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('ENVIAR' , ['class'=> 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}