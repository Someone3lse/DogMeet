@extends('layouts.app')

@section('content')

<h2>Login / Cadastro</h2>

<form>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" class="form-control">
    </div>
    <button class="btn btn-primary">
        Entrar
    </button>
</form>

@endsection