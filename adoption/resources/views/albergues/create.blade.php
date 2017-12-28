@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1>Afiliación de Albergues</h1>
		<!-- Formulario -->
		@include('albergues.form',['albergue' => $albergue, 'url' => '/albergues', 'method' => 'POST'])
	</div>
@endsection