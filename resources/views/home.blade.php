@extends('layouts.app')
@section('content')
<div>
    <button class="btn btn-primary">
        <a href="{{ route('createAdoption') }}">
            <div class="text-warning">CREAR NUEVA ADOPCIÓN</div>
        </a>
    </button>
</div>
    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($adoptions as $adoption)
            <div class="card" style="width: 18rem;">
                <img src="{{ $adoption->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $adoption->name }}</h5>
                    <h5 class="card-title">{{ $adoption->spaces }} Abrazos</h5>
                    <h5 class="card-title">{{ $adoption->datetime }}</h5>
                    <!-- <p class="card-text">{{ $adoption->description }}</p> -->
                    <a href="#" class="btn btn-primary">Adoptar</a> 
                    <form action="{{ route('deleteAdoption', ['id' => $adoption->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit"
                            class="bt-adm m-1 d-flex justify-content-center align-items-center"
                            onclick="return confirm('¿Insistes en no adoptar? {{ $adoption->name }} - ID {{ $adoption->id }} ')">🗑️
                        </button>
                        <a class="bt-adm m-1 d-flex justify-content-center align-items-center"
                            href="{{ route('editAdoption', ['id' => $adoption->id]) }}">✏️</a>
                        <a href="{{ route('showAdoption', ['id' => $adoption->id]) }}">👀</a>
                    </form>
                </div>
                
            </div>
    @endforeach
    </div>
@endsection