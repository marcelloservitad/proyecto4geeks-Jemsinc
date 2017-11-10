{!! Form::open(array('url' => 'admin/consolas-store')) !!}
    <div class="form-group">
		{!! Form::label('nombre' , 'Nombre de la consola') !!}
		{!! Form::text('nombre' , null ,['class'=> 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('ENVIAR' , ['class'=> 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}