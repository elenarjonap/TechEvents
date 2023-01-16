@extends('layouts.app')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://res.cloudinary.com/dog5ljnve/image/upload/v1673605060/LasNotas/gato_zjk7lp.png" class="d-block w-100" alt="fotografía de gato">
        </div>
    <div class="carousel-item">
        <img src="https://res.cloudinary.com/dog5ljnve/image/upload/v1673604839/LasNotas/loro_ozajwd.png" class="d-block w-100" alt="fotografía de loro">
    </div>
    <div class="carousel-item">
        <img src="https://res.cloudinary.com/dog5ljnve/image/upload/v1673606274/LasNotas/perro-min_vjcpka.png" class="d-block w-100" alt="fotografía de perro">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5">
    <div class="d-flex justify-content-center">
        @if(Auth::check() && Auth::user()->isAdmin)
            <button class="btn btn-secondary">
                <a href="{{ route('createAdoption') }}">
                    <div class="text-white">CREAR NUEVA ADOPCIÓN</div>
                </a>
            </button>
        @endif
</div>
<div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
    @foreach ($adoptions as $adoption)
    <div class="card mb-4 m-4" style="width: 20rem;">
        <a href="{{ route('showAdoption', ['id' => $adoption->id]) }}">
            <img src="{{ $adoption->img }}" class="card-img-top mt-3" alt="foto de animal en adopción">            
            <div class="card-body">
                <h4 class="card-title">{{ $adoption->name }}</h4>
                <p class="card-title"><span class="h5">{{ $adoption->spaces }} Abrazos</span></p>
                <a href="{{route('inscribe', $adoption->id)}}" class="btn btn-primary">Adóptame</a>
                <form action="{{ route('deleteAdoption', ['id' => $adoption->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <div class="d-flex ">
                    <a class="btn text-end mt-2"
                        href="{{ route('editAdoption', ['id' => $adoption->id]) }}"><img src="/images/edit.png" alt="botón editar"></a>
                    <button type="submit"
                        class="btn text-end mt-2"
                        onclick="return confirm('¿Quieres borrar esta entrada? {{ $adoption->name }} - ID {{ $adoption->id }} ')"><img src="/images/cancel.png" alt="botón borrar">
                    </button>
                    </div>
                    @endif
                </form>
            </div> 
        </a>
    </div>            
    @endforeach
    <div class="container justify-content-center" style="max-width: 36rem">
        <a class="btn mt-5 mb-1" href="{{ route('home') }}"><img src="/images/return.png"></a>
    </div>
</div>
@endsection