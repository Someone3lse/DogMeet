@extends('layouts.app')

@section('content')

<h2>Cadastrar Animal</h2>

<form>
    <div class="mb-3">
        <label>Foto</label>
        <input type="file" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label>Raça</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label>Idade</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <textarea class="form-control"></textarea>
    </div>
    <button class="btn btn-primary">
        Publicar
    </button>
</form>

@endsection