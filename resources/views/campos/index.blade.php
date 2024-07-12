@extends('layouts.app')

@section('content')

<style>
    .container {
        padding-top: 70px;
    }

    .table-container {
        margin: 0 auto; /* Centralizar a tabela */
        width: 80%;
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
        text-align: right;
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

    .btn-group-sm>.btn,
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }
</style>
<div class="container" style="margin-top: 70px;">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Eventos</div>
        <div>
            <a href="{{ route('campos.create') }}" class="btn btn-primary">Novo Evento</a>
        </div>
    </div>

    <!-- Filtros -->
    <form method="GET" action="{{ route('campos.index') }}" class="mb-4">
        <div class="form-row">
            <div class="col-md-3">
                <input type="month" name="month" class="form-control no-border custom-date-input" id="inputDate" value="{{ request('month') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-light">
            <thead class="thead-light">
                <tr>
                    <th width="30">ID</th>
                    <th>Data</th>
                    <th>Nome da Instituição</th>
                    <th>Hora de Início</th>
                    <th>Hora de Fim</th>
                    <th>Observação</th>
                    <th>Tempo Total (horas)</th>
                    <th>Pagamento</th>
                    <th width="150">Ações</th>
                </tr>
            </thead>
            <tbody>
                @if($campos->isNotEmpty())
                @foreach ($campos as $campo)
                <tr valign="middle">
                    <td>{{ $campo->id }}</td>
                    <td>{{ $campo->data_evento }}</td>
                    <td>{{ $campo->nome_instituicao }}</td>
                    <td>{{ $campo->hora_inicio }}</td>
                    <td>{{ $campo->hora_fim }}</td>
                    <td>{{ $campo->observacao }}</td>
                    <td>{{ number_format($campo->tempo_total, 2) }}</td>
                    <td>{{ number_format($campo->pagamento, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('campos.edit', $campo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="#" onclick="deleteCampo({{ $campo->id }})" class="btn btn-danger btn-sm">Apagar</a>

                        <form id="campo-delete-action-{{ $campo->id }}" action="{{ route('campos.destroy', $campo->id) }}" method="post" style="display: none;">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach

                @else
                <tr>
                    <td colspan="9">Nenhum registro encontrado</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>
            <a href="{{ route('campos.pdf', ['month' => request('month')]) }}" class="btn btn-secondary">Imprimir PDF</a>
        </div>
        <div>
            {{ $campos->links() }}
        </div>
    </div>
</div>

<script>
    function deleteCampo(id) {
        if (confirm('Você tem certeza que deseja apagar este evento?')) {
            document.getElementById('campo-delete-action-' + id).submit();
        }
    }
</script>

@endsection
