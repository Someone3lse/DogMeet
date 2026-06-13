@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <h2 class="mb-4">Login</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control">
                </div>
                <button class="btn btn-primary">
                    Entrar
                </button>
            </form>
        </div>
    </div>
</div>

@endsection