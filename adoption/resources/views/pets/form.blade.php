{!! Form::open(['url' => $url,'method' => $method, 'files' => true])!!}
	<div class="form-group">
		{{Form::text('name', $pet->name,['class' => 'form-control','placeholder'=>'Nombre...'])}}
	</div>
	<div class="form-group">
		{{ Form::label('Fecha de nacimiento:') }}
		{{ Form::date('birthday',$pet->birthday) }}
	</div>
	<div class="form-group">
		{{ Form::label('Fecha de rescate:') }}
		{{ Form::date('date_aux',$pet->date_aux) }}
	</div>

	<div class="form-group">
		{{ Form::label('Avatar:') }}
		{{ Form::file('avatar') }}
		<? $c = $pet->petImage()->count()?>
		@if($pet->petImage()->first() != null)
			{{ Form::label($pet->petImage[0]->image)}}
		@endif
	</div>
	<div class="form-group">
		{{ Form::label('Imagen 1:') }}
		{{ Form::file('img1') }}
		@if($c > 1)
			{{ Form::label($pet->petImage[1]->image)}}
		@endif
	</div>
	<div class="form-group">
		{{ Form::label('Imagen 2') }}
		{{ Form::file('img2') }}
		@if($c > 2)
			{{ Form::label($pet->petImage[2]->image)}}
		@endif
	</div>
	<div class="form-group">
		{{ Form::label('Imagen 3') }}
		{{ Form::file('img3') }}
		@if($c > 3)
			{{ Form::label($pet->petImage[3]->image)}}
		@endif
	</div>

	<div class="form-group">	
		{{Form::text('url_video', $pet->url_video,['class' => 'form-control','placeholder'=>'URL de video...'])}}
	</div>

	<div class="form-group">
		{{Form::select('tipo', ['Perro' => 'Perro','Gato' => 'Gato'], $pet->tipo, ['placeholder' => 'Especie...'])}}
	</div>

	<div class="form-group">
		{{Form::select('pelo', ['Corto' => 'Corto','Largo' => 'Largo'], $pet->pelo, ['placeholder' => 'Tipo de pelo...'])}}
	</div>

	<div class="form-group">
		{{Form::select('activity', ['Bajo' => 'Bajo','Medio' => 'Medio', 'Alto' => 'Alto'], $pet->activity, ['placeholder' => 'Nivel de actividad...'])}}
	</div>

	<div class="form-group">
		{{Form::select('space', ['No es necesario' => 'No es necesario','Pequeño' => 'Pequeño', 'Mediano' => 'Mediano', 'Grande' => 'Grande'], $pet->space, ['placeholder' => 'Espacio abierto requerido...'])}}
	</div>

	<div class="form-group">
		{{Form::select('alone', ['Acompañado siempre' => 'Acompañado siempre', '1 a 3 horas' => '1 a 3 horas','4 a 6 horas' => '4 a 6 horas', '+7 horas' => '+7 horas'], $pet->space, ['placeholder' => 'Puede estar solo...'])}}
	</div>

	<div class="form-group">
		{{Form::select('size', ['Pequeño' => 'Pequeño','Mediano' => 'Mediano','Grande' => 'Grande'], $pet->size,['placeholder' => 'Tamaño...'])}}
	</div>

	<div class="form-group">
		{{Form::select('gender', ['H' => 'Hembra', 'M' => 'Macho'], $pet->gender, ['placeholder' => 'Sexo...'])}}
	</div>

	<div class="form-group">
		{{Form::number('age',$pet->age,['class' => 'form-control','placeholder'=>'Edad en meses aprox...'])}}
	</div>

	<div class="form-group">
		{{Form::textarea('description',$pet->description,['class' => 'form-control','placeholder'=>'Descripción...'])}}
	</div>
	<div class="form-group">
		{{ Form::label('Esterilizado:') }}
		{{ Form::checkbox('sterilized', '1', $pet->sterilized) }}
	</div>
	<div class="form-group">
		{{ Form::label('Inmunizaciones:') }}
		{{ Form::checkbox('vaccine', '1', $pet->vaccine) }}
	</div>
	<div class="form-group">
		{{ Form::label('Fecha de antirrábica:') }}
		{{ Form::date('rage_vac',$pet->rage_vac) }}
	</div>
	<div class="form-group">
		{{ Form::label('Fecha de desparasitación:') }}
		{{ Form::date('dewormed',$pet->dewormed) }}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/pets')}}">Regresar al listado de mascotas</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}