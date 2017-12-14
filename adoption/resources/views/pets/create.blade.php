@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1>Nueva Mascota</h1>
		<!-- Formulario -->
		@include('pets.form',['pet' => $pet, 'url' => '/pets', 'method' => 'POST'])
	</div>
@endsection