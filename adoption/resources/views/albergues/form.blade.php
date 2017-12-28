{!! Form::open(['url' => $url,'method' => $method])!!}
	<div class="form-group">
		{{Form::text('name', "$albergue->name",['class' => 'form-control','placeholder'=>'Nombre del Albergue...'])}}
	</div>
	<div class="form-group">
		{{Form::text('address', "$albergue->address",['class' => 'form-control','placeholder'=>'Dirección...'])}}
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
									'15' => 'Uchumayo'], $albergue->district, ['placeholder' => 'Distrito...'])}}
	</div>
	<div class="form-group">
		{{Form::text('encargado', "$albergue->encargado",['class' => 'form-control','placeholder'=>'Encargado...'])}}
	</div>
	<div class="form-group">
		{{Form::text('DNI', "$albergue->DNI",['class' => 'form-control','placeholder'=>'DNI...'])}}
	</div>
	<div class="form-group">
		{{Form::text('movil', "$albergue->movil",['class' => 'form-control','placeholder'=>'Celular...'])}}
	</div>
	<div class="form-group">
		{{Form::text('email', "$albergue->email",['class' => 'form-control','placeholder'=>'example@gmail.com'])}}
	</div>
	<div class="form-group">
		{{Form::number('cantidad', "$albergue->cantidad",['class' => 'form-control','placeholder'=>'Cantidad de Mascotas...'])}}
	</div>
	<div class="form-group">
		{{Form::number('desparasit', "$albergue->desparasit",['class' => 'form-control','placeholder'=>'Cantidad de mascotas desparasitas...'])}}
	</div>
	<div class="form-group">
		{{Form::number('vacunas', "$albergue->vacunas",['class' => 'form-control','placeholder'=>'Cantidad de mascotas con vacunas completas...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/adopta')}}">Regresar al listado de mascotas</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}