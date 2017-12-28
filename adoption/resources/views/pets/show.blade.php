@extends("layouts.app");

@section('content')
	<div class="container text-center">
		<div class="card pet text-left">
			@if(Auth::check() && $pet->user_id == Auth::user()->id)
				<div class="absolute">
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
						<strong>Actividad:</strong>
					</p>
					<p>
						{{$pet->activity}}
					</p>
					<p>
						<strong>Espacio requerido:</strong>
					</p>
					<p>
						{{$pet->space}}
					</p>
					<p>
						<strong>Tiempo que puede estar solo:</strong>
					</p>
					<p>
						{{$pet->alone}}
					</p>
					<p>
						<strong>Tipo de pelo:</strong>
					</p>
					<p>
						{{$pet->pelo}}
					</p>
					<p>
						<strong>Tamaño:</strong>
					</p>
					<p>
						{{$pet->size}}
					</p>
					<p>
						<strong>Descripción:</strong>
					</p>
					<p>
						{{$pet->description}}
					</p>
					<p>
						<a href="#ventana1" class="btn btn-success" data-toggle="modal">Adoptar</a>
						<div class="modal fade" id="ventana1">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- Header de la ventana -->
									<div class="modal-header">
										<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h2 class="modal-title">!Quiero adoptarlo!</h2>
									</div>

									<!-- Contenido de la ventana -->
									<div class="modal-body bottom">
										<div class="blocksm">
							                <div class="blockm blockm1">
							                    <div class="title-blockm">
							                        <i class="sprite"></i>
							                        <p><span>1.</span> Postula</p>
							                    </div>
							                </div>
							                <div class="blockm blockm2">
							                    <div class="title-blockm">
							                        <i class="sprite"></i>
							                        <p><span>2.</span> Entrevista por Skype</p>
							                    </div>
							                </div>
							                <div class="blockm blockm3">
							                    <div class="title-blockm">
							                        <i class="sprite"></i>
							                        <p><span>3.</span> Resultados</p>
							                    </div>
							                </div>
							                <div class="blockm blockm4">
							                    <div class="title-blockm">
							                        <i class="sprite"></i>
							                        <p><span>4.</span> Pago de contribución de S/. 80.00</p>
							                    </div>
							                </div>
							                <div class="blockm blockm5">
							                    <div class="title-blockm">
							                        <i class="sprite"></i>
							                        <p><span>5.</span> ¡Recoge a tu Mascota!</p>
							                    </div>
							                </div>
							            </div>

							            <div class="actions">
							                <h3>¿Quieres iniciar el proceso de adopción?</h3>
							                <div class="buttons">
							                    <a href="{{route('fichas', [$pet->id])}}" class="btn btn-success">Sí</a>
							                    <a href="" class="btn btn-success" data-dismiss="modal">No</a>
							                </div>
							            </div>

									</div>
								</div>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection