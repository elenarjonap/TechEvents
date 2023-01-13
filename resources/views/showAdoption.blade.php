@extends('layouts.app')
@section('content')
		<div class="text-center">
			<img class="img-thumbnail" src="{{ $adoption->img }}" alt="">
			<div>
			<h2>{{ $adoption->name }}</h2>
			<h2>{{ $adoption->spaces }} Abrazos</h2>
			<h2>{{ $adoption->description }}</h2>
			<h2>{{ $adoption->datetime }}</h2>
			</div>
			<div class="float-right">
				<a href="#" class="btn btn-primary">Adóptame</a> 
				<a class="btn btn-secondary mb-3" href="{{ route('home') }}">↩</a>
			</div>
		</div>
@endsection