@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
        <img
            src="{{ asset('assets/DogStock.jpg') }}"
            class="img-fluid rounded"
            style="height:400px; width:100%; object-fit:cover;">
    </div>
    <div class="col-md-6">
        <h1>{{ $animal->nome }}</h1>
        <p>
            <strong>Espécie:</strong>
            {{ $animal->especie }}
        </p>
        <p>
            <strong>Raça:</strong>
            {{ $animal->raca }}
        </p>
        <p>
            <strong>Idade:</strong>
            {{ $animal->idade }}
        </p>
        <p>
            <strong>Status:</strong>
            {{ $animal->status }}
        </p>
        <p>
            <strong>Descrição:</strong>
            {{ $animal->descricao }}
        </p>
        <p>
            <strong>Contato:</strong>
            {{ $animal->contato }}
        </p>
        <a href="/animais" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</div>

@endsection