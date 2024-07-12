@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Removed card classes -->
            <div class="bg-primary text-white p-3 mb-3 rounded text-center">Editar Dados do ginásio</div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('ginasio.update', $ginasio->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="entidade" class="form-label">Entidade:</label>
                        <input type="text" class="form-control" id="entidade" name="entidade" value="{{ $ginasio->entidade }}">
                    </div>

                    <div class="mb-3">
                        <label for="nome_ocupante" class="form-label">Instituicao:</label>
                        <input type="text" class="form-control" id="nome_instituicao" name="nome_instituicao" value="{{ $ginasio->nome_instituicao }}">

                    </div>


                    <div class="mb-3">
                        <label for="nome_ocupante" class="form-label">Nome do Ocupante:</label>
                        <input type="text" class="form-control" id="nome_ocupante" name="nome_ocupante" value="{{ $ginasio->nome_ocupante }}">
                    </div>

                    <div class="mb-3">
                        <label for="tipo_evento" class="form-label">Tipo de Evento:</label>
                        <input type="text" class="form-control" id="tipo_evento" name="tipo_evento" value="{{ $ginasio->tipo_evento }}">
                    </div>

                    <div class="mb-3">
                        <label for="data_evento" class="form-label">Data do Evento:</label>
                        <input type="date" class="form-control" id="data_evento" name="data_evento" value="{{ $ginasio->data_evento }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hora_inicio" class="form-label">Hora de Início:</label>
                                <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" value="{{ $ginasio->hora_inicio }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hora_fim" class="form-label">Hora de Fim:</label>
                                <input type="time" class="form-control" id="hora_fim" name="hora_fim" value="{{ $ginasio->hora_fim }}">
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contacto" class="form-label">Contacto:</label>
                                <input type="text" class="form-control" id="contacto" name="contacto" value="{{ $ginasio->contacto }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="responsavel" class="form-label">Responsável:</label>
                                <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{ $ginasio->responsavel }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
