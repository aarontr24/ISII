<div class="card1 pet1 text-left">
	@if(Auth::check() && $pet->user_id == Auth::user()->id)
		<div class="absolute actions">
			<a href="{{url('/pets/'.$pet->id.'/edit')}}">
				Editar
			</a>
			@include('pets.delete',['pet' => $pet])
		</div>
	@endif

	<h1>{{ $pet->name }}</h1>
	<div class="">
		<div class="">
			<img src="{{url('/pets/images/'.$pet->petImage()->first()->image)}}" class="product-avatar">
		</div>
		<div class="btn1">
			<a href="{{url('/pets/'.$pet->id)}}" class="btn btn-success">Conóceme</a>
		</div>
		
	</div>
</div>