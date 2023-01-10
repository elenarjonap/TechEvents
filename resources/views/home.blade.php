@extends('layouts.app')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://img.freepik.com/foto-gratis/adorable-gatito-blanco-negro-pared-monocromatica-detras-ella_23-2148955167.jpg?w=1380&t=st=1673349242~exp=1673349842~hmac=dfd149c1102a8b8c3f24ab38dc95166be240f05b3cdf920c25d6d357f2b57add" class="d-block w-100" alt="...">
        </div>
    <div class="carousel-item">
        <img src="https://img.freepik.com/foto-gratis/hombre-barbudo-acariciando-lindo-pajaro_23-2148740489.jpg?w=1480&t=st=1673348879~exp=1673349479~hmac=7c72174717e4a379fbd0482ef5c79c3cf8e3b2a565703a5905dc68872b55f879
" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="" class="d-block w-100" alt="...">
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
            <a href="{{ route('showAdoption', ['id' => $adoption->id]) }}">
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
                    </form>
                </div> 
            </div>
            </a>
    @endforeach
    </div>
@endsection