@extends("layouts.app");

@section("content")
<div class="big-padding text-center blue-grey white-text">
	<h1>Mis Mascotas</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Tipo</td>
				<td>Raza</td>
				<td>Tamaño</td>
				<td>Edad</td>
				<td>Color</td>
				<td>Sexo</td>
				<td>Descripción</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($pets as $pet)
				<tr>
					<td>{{ $pet->id }}</td>
					<td>{{ $pet->name }}</td>
					<td>{{ $pet->tipo }}</td>
					<td>{{ $pet->race }}</td>
					<td>{{ $pet->size }}</td>
					<td>{{ $pet->age }}</td>
					<td>{{ $pet->color }}</td>
					<td>{{ $pet->gender }}</td>
					<td>{{ $pet->description }}</td>
					<td>
						<a href="{{url('/pets/'.$pet->id)}}">Ver</a>
						<a href="{{url('/pets/'.$pet->id.'/edit')}}">
							Editar
						</a>
						@include('pets.delete',['pet' => $pet])
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/pets/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection