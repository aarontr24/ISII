@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1>Modificar Mascota</h1>
		<!-- Formulario -->
		@include('pets.form',['pet' => $pet, 'url' => '/pets/'.$pet->id, 'method' => 'PATCH'])
	</div>
@endsection