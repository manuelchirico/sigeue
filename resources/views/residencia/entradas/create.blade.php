@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Criar Nova Reserva</h2>
    <form method="POST" action="{{ route('residencia.entradas.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome_ocupante">Nome do Ocupante</label>
            <input type="text" class="form-control" id="nome_ocupante" name="nome_ocupante" required>
        </div>
        <div class="form-group">
            <label for="casa_a_ocupar">Casa a Ocupar</label>
            <select class="form-control" id="casa_a_ocupar" name="casa_a_ocupar" required>
                <option value="Casa de Hospede">Casa de Hospede</option>
                <option value="Suite">Suite</option>
            </select>
        </div>
        <div class="form-group">
            <label for="data_entrada">Data de Entrada</label>
            <input type="date" class="form-control" id="data_entrada" name="data_entrada" required>
        </div>
        <div class="form-group">
            <label for="data_saida">Data de Saída</label>
            <input type="date" class="form-control" id="data_saida" name="data_saida" required>
        </div>
        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

@endsection
