@extends('layouts.app')

@section('content')

<div class="bg-light rounded p-5 text-center mb-5 shadow-sm">
    <h1 class="display-4 fw-bold">
        DOGMEET
    </h1>
    <p class="lead">
        Encontre um novo amigo e ajude animais a encontrarem um lar.
    </p>
    <a href="/animais" class="btn btn-success btn-lg">
        Ver Animais
    </a>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img
                src="{{ asset('assets/DogStock.jpg') }}"
                class="card-img-top"
                alt="Animais"
                style="height: 250px; object-fit: cover;">
            <div class="card-body">
                <h3 class="card-title">
                    Animais
                </h3>
                <p class="card-text">
                    Veja cães e gatos disponíveis para adoção.
                </p>
            </div>
            <div class="card-footer bg-white border-0">
                <a href="/animais" class="btn btn-primary w-100">
                    Acessar
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img
                src="{{ asset('assets/tipsStock.png') }}"
                class="card-img-top"
                alt="Dicas"
                style="height: 250px; object-fit: cover;">
            <div class="card-body">
                <h3 class="card-title">
                    Dicas
                </h3>
                <p class="card-text">
                    Aprenda sobre alimentação, higiene e saúde dos animais.
                </p>
            </div>
            <div class="card-footer bg-white border-0">
                <a href="/dicas" class="btn btn-success w-100">
                    Ver Dicas
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <img
                src="{{ asset('assets/denunciaStock.jpg') }}"
                class="card-img-top"
                alt="Denúncia"
                style="height: 250px; object-fit: cover;">
            <div class="card-body">
                <h3 class="card-title">
                    Denúncia
                </h3>
                <p class="card-text">
                    Ajude a combater o abandono e os maus-tratos.
                </p>
            </div>
            <div class="card-footer bg-white border-0">
                <a href="/denuncia" class="btn btn-danger w-100">
                    Denunciar
                </a>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 p-4 bg-light rounded">
    <h2>Sobre o DOGMEET</h2>
    <p>
        O DOGMEET é uma plataforma criada para facilitar a adoção responsável
        de animais, divulgar informações sobre cuidados e incentivar a denúncia
        de casos de abandono e maus-tratos.
    </p>
</div>

@endsection