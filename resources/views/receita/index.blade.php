@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 70px;">
    <div class="container">
        <h1 class="my-4">Receitas Mensais</h1>

        <!-- Botão de filtro por mês -->
        <form method="GET" action="{{ route('receita.index') }}" class="mb-4">
            <div class="form-row">
                <div class="col-md-3">
                    <input type="month" name="month" class="form-control no-border custom-date-input" value="{{ request('month') }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Filtrar por Mês</button>
                </div>
            </div>
        </form>

        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-striped table-light">
                    <!-- Cabeçalho da tabela -->
                    <thead class="thead-light">
                        <tr>
                            <th>Mês</th>
                            <th>Casas</th>
                            <th>Ginásio</th>
                            <th>Campos</th>
                            <th>Total Entrada</th>
                            <th>Saídas</th>
                            <th>Valor Existente</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Corpo da tabela -->
                        @if($receitas->isNotEmpty())
                            @foreach ($receitas as $receita)
                                <tr valign="middle">
                                    <td>{{ $receita->mes }}</td>
                                    <td>{{ $receita->reserva }}</td>
                                    <td>{{ $receita->ginasio }}</td>
                                    <td>{{ $receita->campo }}</td>
                                    <td>{{ $receita->total_entrada }}</td>
                                    <td>{{ $receita->saidas }}</td>
                                    <td>{{ $receita->valor_existente }}</td>
                                    <td>
                                        <a href="{{ route('receitas.edit', $receita->mes) }}" class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Total -->
                            <tr>
                                <td><strong>Total</strong></td>
                                <td><strong>{{ $totalCasas }}</strong></td>
                                <td><strong>{{ $totalGinasio }}</strong></td>
                                <td><strong>{{ $totalCampo }}</strong></td>
                                <td><strong>{{ $totalEntrada }}</strong></td>
                                <td><strong>{{ $receitas->sum('saidas') }}</strong></td>
                                <td><strong>{{ $totalCasas + $totalGinasio + $totalCampo - $receitas->sum('saidas') }}</strong></td>
                                <td></td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="7">Nenhum registro encontrado</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botão de impressão -->
        <div>
            <a href="{{ route('receitas.pdf', ['month' => request('month')]) }}" class="btn btn-secondary">Imprimir PDF</a>
        </div>
    </div>
</div>

@endsection
