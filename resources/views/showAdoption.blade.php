@extends('layouts.app')
@section('content')
<div class="container justify-content-center" style="max-width: 36rem">
	<div class="cardBorder">
		<div class="card">
			<img class="card-img-top" src="{{ $adoption->img }}" alt="foto de animal en adopción">
			<div class="card-body">
				<h1 class="text-center mb-2">{{ $adoption->name }}</h1>
				<h3 class="text-center mb-4"><span class="h2">{{ $adoption->spaces }} Abrazos</span> · {{ $adoption->datetime }}</h3>
				<h2 class="">{{ $adoption->description }}</h2>
				<div class="d-flex flex-column">
					<a href="{{ route('inscribe', $adoption->id) }}" class="btn btn-primary mt-4 mb-4 fs-2">Abrázame</a>
					<a href="{{ route('unscribe', $adoption->id) }}" class="btn btn-danger mt-4 mb-4 fs-2">Detener inscripción</a>
				</div>
			</div>
		</div>
	</div>	
	<a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/images/return.png"></a>
</div>
@endsection
