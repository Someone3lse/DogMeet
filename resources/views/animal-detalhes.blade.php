@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="bg-secondary" style="height:400px;">
        </div>
    </div>

    <div class="col-md-6">
        <h2>Nome do Animal</h2>
        <p><strong>Idade:</strong> 3 anos</p>
        <p><strong>Raça:</strong> SRD</p>
        <p>
            Descrição completa do animal.
        </p>
        <p>
            Contato do responsável.
        </p>
        <button class="btn btn-success">
            Entrar em contato
        </button>
    </div>
</div>

@endsection