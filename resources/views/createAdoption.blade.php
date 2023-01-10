@extends('layouts.app')
@section('content')
	<div class="containerCreate">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h2 class="cardTitle d-flex flex-wrap row justify-content-center">Crear nueva adopción</h2>
							<form class="justify-content-center" action="{{ route('storeAdoption') }}" method="post">
								@csrf
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
								<input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="nombre">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Abrazos</span>
								<input type="text" name="spaces" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="abrazos maximos">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
								<input type="text" name="description" class="form-control"
								aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="descripcion">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Foto</span>
								<input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGoup-sizing-default" placeholder="url foto">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Fecha</span>
								<input type="text" name="datetime" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Fecha">
							</div>
							<div class="float-right">
								<a class="btn btn-primary mb-3" href="{{ route('home') }}">↩</a>
							</div>
							<div class="btnCreate">
								<button type="submit" class="btn btn-outline-success" value="Create">Crear</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection