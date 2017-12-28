{!! Form::open(['url' => $url,'method' => $method])!!}
	<div class="form-group">
		{{Form::text('names', "$ficha->names",['class' => 'form-control','placeholder'=>'Nombres...'])}}
	</div>
	<div class="form-group">
		{{Form::text('lastname', "$ficha->lastname",['class' => 'form-control','placeholder'=>'Apellidos...'])}}
	</div>
	<div class="form-group">
		{{Form::text('address', "$ficha->address",['class' => 'form-control','placeholder'=>'Dirección...'])}}
	</div>
	<div class="form-group">
		{{Form::select('district', ['1' => 'Cercado', 
									'2' => 'Alto Selva alegre', 
									'3' => 'Cayma', 
									'4' => 'Cerro Colorado', 
									'5' => 'Jacobo Hunter', 
									'6' => 'José Luis Bustamante y Rivero', 
									'7' => 'Mariano Melgar', 
									'8' => 'Miraflores', 
									'9' => 'Paucarpata', 
									'10' => 'Sabandia', 
									'11' => 'Sachaca', 
									'12' => 'Socabaya', 
									'13' => 'Tiabaya', 
									'14' => 'Yanahuara', 
									'15' => 'Uchumayo'], $ficha->district, ['placeholder' => 'Distrito...'])}}
	</div>
	<div class="form-group">
		{{Form::text('movil', "$ficha->movil",['class' => 'form-control','placeholder'=>'Celular...'])}}
	</div>
	<div class="form-group">
		{{Form::text('phone', "$ficha->phone",['class' => 'form-control','placeholder'=>'Teléfono fijo...'])}}
	</div>
	<div class="form-group">
		{{ Form::label('Fecha de nacimiento:') }}
		{{ Form::date('birthday',$ficha->birthday) }}
	</div>
	<div class="form-group">
		{{Form::text('DNI', "$ficha->DNI",['class' => 'form-control','placeholder'=>'DNI...'])}}
	</div>
	<div class="form-group">
		{{Form::text('email', "$ficha->email",['class' => 'form-control','placeholder'=>'example@gmail.com'])}}
	</div>
	<div class="form-group">
		{{Form::select('estcivil', ['1' => 'Soltero', 
									'2' => 'Casado', 
									'3' => 'Viudo', 
									'4' => 'Divorciado'], $ficha->estcivil, ['placeholder' => 'Estado Civil...'])}}
	</div>
	<div class="form-group">
		{{Form::text('ocupacion', "$ficha->ocupacion",['class' => 'form-control','placeholder'=>'Ocupación...'])}}
	</div>
	<div class="form-group">
		{{Form::text('labora', "$ficha->labora",['class' => 'form-control','placeholder'=>'Centro de trabajo ó Estudio...'])}}
	</div>
	<div class="form-group">
		{{Form::hidden('pet_id', "$id") }}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/adopta')}}">Regresar al listado de mascotas</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}