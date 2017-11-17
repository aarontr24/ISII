@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey write-text">
		<h1>Productos</h1>
	</div>
	<dir class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Título</td>
					<td>Descripción</td>
					<td>Precio</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->title }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->pricing }}</td>
					<td>
						<a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</dir>
	<div class="floating">
		<a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection