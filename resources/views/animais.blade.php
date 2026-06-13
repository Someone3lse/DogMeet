@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🐾 Animais para Adoção</h2>
    <a href="/cadastro-animal" class="btn btn-success">
        + Cadastrar Animal
    </a>
</div>

<div class="row">
    @foreach($animais as $animal)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img
                src="{{ asset('assets/DogStock.jpg') }}"
                class="card-img-top"
                style="height:250px; object-fit:cover;">
            <div class="card-body">
                <h4>{{ $animal->nome }}</h4>
                <p>
                    {{ $animal->especie }} • {{ $animal->idade }}
                </p>
                <p>
                    {{ $animal->descricao }}
                </p>
                <a href="/animal/{{ $animal->id }}"
                class="btn btn-primary">
                    Ver Mais
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection