@extends('layouts.app')

@section('content')

<div class="text-center mb-5">

    <h1>DOGMEET</h1>
    <p>
        Plataforma de adoção de animais
    </p>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card p-3">
            <div class="bg-secondary mb-3" style="height:200px;">
            </div>
            <h3>Animais</h3>
            <p>
                Veja animais disponíveis para adoção.
            </p>
            <a href="/animais" class="btn btn-primary">
                Acessar
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <div class="bg-secondary mb-3" style="height:200px;">
            </div>
            <h3>Dicas</h3>
            <p>
                Informações sobre cuidados com animais.
            </p>
            <a href="/dicas" class="btn btn-success">
                Ver Dicas
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <div class="bg-secondary mb-3" style="height:200px;">
            </div>
            <h3>Denúncia</h3>
            <p>
                Denuncie maus-tratos.
            </p>
            <a href="/denuncia" class="btn btn-danger">
                Denunciar
            </a>
        </div>
    </div>
</div>

@endsection