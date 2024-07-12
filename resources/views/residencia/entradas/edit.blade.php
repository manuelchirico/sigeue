@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between py-3">
        <h2>Editar Reserva</h2>
        <a href="{{ route('residencia.entradas.list') }}" class="btn btn-secondary">Voltar</a>
    </div>
    <form method="POST" action="{{ route('residencia.entradas.update', $reserva->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_ocupante">Nome do Ocupante</label>
            <input type="text" class="form-control" id="nome_ocupante" name="nome_ocupante" value="{{ $reserva->nome_ocupante }}" required>
        </div>
        <div class="form-group">
            <label for="casa_a_ocupar">Casa a Ocupar</label>
            <select class="form-control" id="casa_a_ocupar" name="casa_a_ocupar" required>
                <option value="Casa de Hospede" {{ $reserva->casa_a_ocupar == 'Casa de Hospede' ? 'selected' : '' }}>Casa de Hospede</option>
                <option value="Suite" {{ $reserva->casa_a_ocupar == 'Suite' ? 'selected' : '' }}>Suite</option>
            </select>
        </div>
        <div class="form-group">
            <label for="data_entrada">Data de Entrada</label>
            <input type="date" class="form-control" id="data_entrada" name="data_entrada" value="{{ $reserva->data_entrada }}" required>
        </div>
        <div class="form-group">
            <label for="data_saida">Data de Saída</label>
            <input type="date" class="form-control" id="data_saida" name="data_saida" value="{{ $reserva->data_saida }}" required>
        </div>
        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" value="{{ $reserva->contacto }}" required>
        </div>
        <div class="form-group">
            <label for="pagamento">Pagamento</label>
            <select class="form-control" id="pagamento" name="pagamento" required>
                <option value="pendente" {{ $reserva->pagamento == 'pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="pago" {{ $reserva->pagamento == 'pago' ? 'selected' : '' }}>Pago</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

@endsection
