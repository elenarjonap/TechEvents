@extends('layouts.app')

@section('content')

    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($adoptions as $adoption)
            <div class="card" style="width: 18rem;">
                <img src="{{ $adoption->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $adoption->name }}</h5>
                    <h5 class="card-title">{{ $adoption->spaces }} Abrazos</h5>
                    <h5 class="card-title">{{ $adoption->datetime }}</h5>
                    <p class="card-text">{{ $adoption->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    @endforeach
    </div>
@endsection
