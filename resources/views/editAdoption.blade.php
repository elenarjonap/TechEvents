@extends('layouts.app')
@section('content')
	<div class="containerCreate">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h2 class="cardTitle">Editar adopción</h2>
							<form class="justify-content-center" action="{{ route('updateAdoption', $adoption->id) }}" method= "POST"> @method('PATCH')
								@csrf
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
								<input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$adoption->name}}">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Abrazos</span>
								<input type="text" name="spaces" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$adoption->spaces}}">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
								<input type="text" name="description" class="form-control"
								aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$adoption->description}}">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Foto</span>
								<input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGoup-sizing-default" value="{{$adoption->img}}">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Fecha</span>
								<input type="text" name="datetime" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$adoption->datetime}}">
							</div>
							<div class="float-right">
								<a class="btn btn-primary" href="{{ route('home') }}">↩</a>
							</div>
							<div class="btnCreate">
								<button type="submit" class="btn btn-outline-success">Guardar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection