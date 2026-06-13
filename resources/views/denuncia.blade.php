@extends('layouts.app')

@section('content')

<h2 class="mb-4">Registrar Denúncia</h2>

<div class="card p-4">

    <form>

        <div class="mb-3">
            <label class="form-label">
                Nome do Denunciante
            </label>

            <input
                type="text"
                class="form-control"
                placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Endereço da Ocorrência
            </label>

            <input
                type="text"
                class="form-control"
                placeholder="Informe o endereço">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Tipo da Denúncia
            </label>

            <select class="form-select">
                <option>Maus-tratos</option>
                <option>Abandono</option>
                <option>Falta de alimentação</option>
                <option>Outros</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">
                Descrição
            </label>

            <textarea
                class="form-control"
                rows="5"
                placeholder="Descreva a situação"></textarea>
        </div>

        <button
            type="submit"
            class="btn btn-danger">
            Enviar Denúncia
        </button>

    </form>

</div>

@endsection