@extends('layouts.app')

@section('content')

<style>
    .container {
        padding-top: 70px;
    }

    .table-container {
        margin: 0 auto; /* Centralizar a tabela */
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table-responsive {
        overflow-x: scroll; /* Alterado para scroll */
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
        <div class="h4">Eventos no Ginásio</div>
        <div>
            <a href="{{ route('ginasio.create') }}" class="btn btn-primary">Novo Evento</a>
        </div>
    </div>

    <!-- Filtros -->
    <form method="GET" action="{{ route('ginasio.index') }}" class="mb-4">
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

    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-striped table-light">
                <thead class="thead-light">
                    <tr>
                        <th width="30">ID</th>
                        <th>Entidade</th>
                        <th>Nome da Instituição</th>
                        <th>Nome do Ocupante</th>
                        <th>Tipo de Evento</th>
                        <th>Data do Evento</th>
                        <th>Hora de Início</th>
                        <th>Hora de Fim</th>
                        <th>Contacto</th>
                        <th>Responsável</th>
                        <th>Pagamento</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if($ginasios->isNotEmpty())
                    @foreach ($ginasios as $ginasio)
                    <tr valign="middle">
                        <td>{{ $ginasio->id }}</td>
                        <td>{{ $ginasio->entidade }}</td>
                        <td>{{ $ginasio->nome_instituicao }}</td>
                        <td>{{ $ginasio->nome_ocupante }}</td>
                        <td>{{ $ginasio->tipo_evento }}</td>
                        <td>{{ $ginasio->data_evento }}</td>
                        <td>{{ $ginasio->hora_inicio }}</td>
                        <td>{{ $ginasio->hora_fim }}</td>
                        <td>{{ $ginasio->contacto }}</td>
                        <td>{{ $ginasio->responsavel }}</td>
                        <td>{{ $ginasio->pagamento }}</td>
                        <td>
                            <a href="{{ route('ginasio.edit', $ginasio->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" onclick="deleteGinasio({{ $ginasio->id }})" class="btn btn-danger btn-sm">Apagar</a>
                        
                            <form id="ginasio-delete-form-{{ $ginasio->id }}" action="{{ route('ginasio.destroy', $ginasio->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="12">Nenhum registro encontrado</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $ginasios->links() }}
    </div>

    <div>
        <a href="{{ route('ginasio.pdf', ['month' => request('month')]) }}" class="btn btn-secondary mt-3">Imprimir PDF</a>
    </div>

</div>

<script>
    function deleteGinasio(id) {
        if (confirm('Você tem certeza que deseja apagar este evento?')) {
            document.getElementById('ginasio-delete-form-' + id).submit();
        }
    }
</script>

@endsection
