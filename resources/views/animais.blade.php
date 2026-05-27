@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h2>Animais para adoção</h2>
    <a href="/cadastro-animal" class="btn btn-success">
        Cadastrar Animal
    </a>
</div>

<div class="row">
    @for($i = 0; $i < 6; $i++)
    <div class="col-md-4 mb-4">
        <div class="card p-3">
            <div class="bg-secondary mb-3" style="height:200px;">
            </div>
            <h4>Nome do Animal</h4>
            <p>
                Pequena descrição do animal.
            </p>
            <a href="/animal" class="btn btn-primary">
                Ver Mais
            </a>
        </div>
    </div>
    @endfor
</div>
@endsection