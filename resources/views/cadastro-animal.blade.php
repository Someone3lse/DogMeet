@extends('layouts.app')

@section('content')

<h2 class="mb-4">Cadastrar Animal</h2>

<div class="card p-4">

    <form method="POST" action="/cadastro-animal">
    @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Espécie</label>
            <select name="especie" class="form-select">
                <option>Cachorro</option>
                <option>Gato</option>
                <option>Outro</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Raça</label>
            <input type="text" name="raca" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Idade</label>
            <input type="text" name="idade" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Vacinação</label>
            <input type="text" class="form-control" placeholder="Ex: Vacinas em dia">
        </div>

        <div class="mb-3">
            <label class="form-label">Informações Extras</label>
            <textarea
                class="form-control"
                rows="3"
                placeholder="Doenças, comportamento, observações..."></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Contato</label>
            <input type="text" name="contato" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Cadastrar Animal
        </button>

    </form>

</div>

@endsection