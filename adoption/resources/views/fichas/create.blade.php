@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1>Ficha de postulación a adopción</h1>
		<!-- Formulario -->
		@include('fichas.form',['ficha' => $ficha, 'id' => $id, 'url' => '/fichas', 'method' => 'POST'])
	</div>
@endsection