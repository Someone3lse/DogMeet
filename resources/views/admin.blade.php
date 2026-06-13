@extends('layouts.app')

@section('content')

<h1 class="mb-4">Painel Administrativo</h1>

<div class="row">

    <div class="col-md-4 mb-3">
        <div class="card p-3 text-center">
            <h3>🐾 Animais</h3>
            <p>Gerenciar animais cadastrados.</p>
            <a href="/animais" class="btn btn-primary">
                Ver Animais
            </a>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card p-3 text-center">
            <h3>📢 Denúncias</h3>
            <p>Consultar denúncias recebidas.</p>
            <a href="/denuncia" class="btn btn-danger">
                Ver Denúncias
            </a>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card p-3 text-center">
            <h3>💡 Dicas</h3>
            <p>Gerenciar conteúdo informativo.</p>
            <a href="/dicas" class="btn btn-success">
                Ver Dicas
            </a>
        </div>
    </div>

</div>

<div class="card mt-4">
    <div class="card-header">
        Resumo do Sistema
    </div>
    <div class="card-body">

        <p>
            Total de animais cadastrados:
            <strong>{{ \App\Models\Animal::count() }}</strong>
        </p>

        <p>
            Usuários cadastrados:
            <strong>{{ \App\Models\User::count() }}</strong>
        </p>

    </div>
</div>

@endsection