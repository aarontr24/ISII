@extends("layouts.app");

@section('content')
	<div class="container text-center">
		<div class="card pet text-left">
			@if(Auth::check() && $pet->user_id == Auth::user()->id)
				<div class="absolute actions">
					<a href="{{url('/pets/'.$pet->id.'/edit')}}">
						Editar
					</a>
					@include('pets.delete',['pet' => $pet])
				</div>
			@endif

			<h1>{{ $pet->name }}</h1>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<img src="{{url('/pets/images/'.$pet->petImage()->first()->image)}}" class="product-avatar">
				</div>
				<div class="col-sm-6 col-xs-12">
					<p>
						<strong>Descripción</strong>
					</p>
					<p>
						{{$pet->description}}
					</p>
					<p>
						<a href="" class="btn btn-success">Adoptar</a>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection