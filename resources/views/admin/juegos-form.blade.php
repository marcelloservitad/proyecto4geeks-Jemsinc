{!! Form::open(array('url' => 'admin/juegos-store')) !!}
    <div class="form-group">
		{!! Form::label('nombre' , 'Nombre del producto') !!}
		{!! Form::text('nombre' , null ,['class'=> 'form-control'])  !!}
	</div>
	    <div class="form-group">
		{!! Form::label('descripcion' , 'Descripcion del producto') !!}
		{!! Form::textarea('descripcion' , null ,['class'=> 'form-control'])  !!}
	</div>
	    <div class="form-group">
		{!! Form::label('precio' , 'Precio del producto') !!}
		{!! Form::number('precio' , null ,['class'=> 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::submit('ENVIAR' , ['class'=> 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}