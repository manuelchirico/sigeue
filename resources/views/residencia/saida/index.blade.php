@extends('layouts.app')

@section('content')

<style>
    .container {
        padding-top: 70px;
    }

    .table-container {
        margin: 0 auto; /* Centralizar a tabela */
        width: 100; /* Usar a largura total */
        margin-bottom: 1rem;
        color: #212529;
    }

    .table-responsive {
        overflow-x: auto;
    }

    th,
    td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
        text-align: left; /* Ajuste para a esquerda */
    }

    th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .thead-light th {
        color: #495057;
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }
</style>

<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    

        <!-- Formulário de Filtro -->
        <div class="filter-container d-flex justify-content-start mr-4" style="z-index: 1000; margin-top: 50px;"> <!-- Alterado justify-content para justify-content-end -->
            <form method="GET" action="{{ route('residencia.saida.index') }}" class="form-inline mb-2">
                <div class="form-group">
                    <h5>Escolha Mes e ano</h5>
                    <input type="month" name="month" class="form-control custom-date-input" id="inputDate" value="{{ request('month') }}">
                </div>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>

        <div class="table-container">
            <div class="table-responsive">
                <h5>Lista de Reservas Pagas</h5>
                <table class="table table-striped table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome do Ocupante</th>
                            <th>Casa a Ocupar</th>
                            <th>Data de Entrada</th>
                            <th>Data de Saída</th>
                            <th>Contacto</th>
                            <th>Número de Dias</th>
                            <th>Valor Total</th>
                            <th>Pagamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservas as $reserva)
                        <tr>
                            <td>{{ $reserva->id }}</td>
                            <td>{{ $reserva->nome_ocupante }}</td>
                            <td>{{ $reserva->casa_a_ocupar }}</td>
                            <td>{{ $reserva->data_entrada }}</td>
                            <td>{{ $reserva->data_saida }}</td>
                            <td>{{ $reserva->contacto }}</td>
                            <td>{{ $reserva->numero_dias }}</td>
                            <td>{{ $reserva->valor_total }}</td>
                            <td>{{ $reserva->pagamento }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
