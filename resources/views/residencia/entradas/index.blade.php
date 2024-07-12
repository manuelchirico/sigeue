@extends('layouts.app')

@section('content')

<style>
    .container {
        padding-top: 70px;
    }

    .table-container {
        margin: 0 auto; /* Centralizar a tabela */
        width: 80%; /* Usar a largura total */
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

    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Ginásio</div>
            <div>
                <a href="{{ route('residencia.entradas.create') }}" class="btn btn-primary">Criar Novo</a>
            </div>
        </div>

        <!-- Formulário de Filtro -->
        <div class="filter-container d-flex justify-content-start mr-4" style="z-index: 1000; margin-top: 50px;">
            <form method="GET" action="{{route('residencia.entradas.list') }}" class="form-inline mb-2">
                <div class="form-group">
                    <input type="month" name="month" class="form-control custom-date-input" id="inputDate" value="{{ request('month') }}">
                </div>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>

        <div class="table-container">
            <div class="table-responsive">
                <h5>Lista de Reservas</h5>
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
                            <th>Ações</th>
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
                            <td>
                                <a href="{{ route('residencia.entradas.edit', $reserva->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('residencia.entradas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $reservas->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
