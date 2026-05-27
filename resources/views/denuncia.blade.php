@extends('layouts.app')

@section('content')

<h2>Denúncia de Maus-Tratos</h2>
<p>
    Utilize este espaço para denunciar abandono ou maus-tratos.
</p>
<form>
    <div class="mb-3">
        <label>Descrição</label>
        <textarea class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Local</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label>Contato</label>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-danger">
        Enviar denúncia
    </button>
</form>

@endsection