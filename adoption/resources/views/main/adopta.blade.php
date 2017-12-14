@extends('layouts.app')

@section('title', 'Llevame a casa')

@section('content')
	<div class="text-center products-container">
		<div class="row">
			@foreach($pets as $pet)
				<div class="col-xs-5 col-sm-3">
					@include("pets.pet",["pet" => $pet])
				</div>
			@endforeach
		</div>
		<div>
			{{$pets->links()}}
		</div>
	</div>
@endsection