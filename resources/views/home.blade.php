@extends('layouts.app')

@section('content')

    @foreach ($adoptions as $adoption)
        <div class="card" style="width: 18rem;">
            <img src="{{$adoption->img}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $adoption->name }}</h5>
                <h5 class="card-title">{{ $adoption->spaces }} Abrazos</h5>
                <h5 class="card-title">{{ $adoption->datetime }}</h5>
                <p class="card-text">{{ $adoption->description }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach

@endsection
