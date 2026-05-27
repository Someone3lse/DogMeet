@extends('layouts.app')

@section('content')

<h2>Painel Administrativo</h2>
<div class="row">
    <div class="col-md-3">
        <div class="card p-3 text-center">
            <h4>Usuários</h4>
            <button class="btn btn-primary">
                Gerenciar
            </button>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 text-center">
            <h4>Animais</h4>
            <button class="btn btn-success">
                Gerenciar
            </button>
        </div>
    </div>
</div>

@endsection