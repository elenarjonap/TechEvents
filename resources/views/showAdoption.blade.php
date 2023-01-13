@extends('layouts.app')
@section('content')

		<div class="container d-flex justify-content-center">
			<div class="card" style="width: 20rem;">
				<img class="card-img-top" src="{{ $adoption->img }}" alt="">
				<div class="card-body">
						<h2>{{ $adoption->name }}</h2>
						<h2>{{ $adoption->spaces }} Abrazos</h2>
						<h2>{{ $adoption->description }}</h2>
						<h2>{{ $adoption->datetime }}</h2>
						<div class="float-right">
							<a href="#" class="btn btn-primary">Adóptame</a> 
							<a class="btn btn-secundary mb-3" href="{{ route('home') }}">↩</a>
				</div>
			</div>
		</div>
		
@endsection