@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 70px;"> <!-- Adiciona margem superior de 70px -->
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Ajusta a largura da coluna centralizada -->
            
            <!-- Card para organizar e centralizar o conteúdo -->
            <div class="card">
                <div class="card-header text-center">
                    <h4>Registrar Evento</h4>
                </div>
                <div class="card-body">
                    
                    <!-- Botão para voltar -->
                    <div class="d-flex justify-content-between py-3">
                        <div></div> <!-- Elemento vazio para manter o botão à direita -->
                        <div>
                            <a href="{{ route('campos.index') }}" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>

                    <!-- Mensagem de sucesso -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Formulário -->
                    <form method="POST" action="{{ url('/campos') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputDate" class="black-label font-weight-bold">Data Evento</label>
                            <input type="date" class="form-control no-border custom-date-input" id="inputDate" name="data_evento" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputInstitution" class="black-label font-weight-bold">Nome da Instituição</label>
                            <input type="text" class="form-control no-border" id="inputInstitution" name="nome_instituicao" style="background-color: white; color: black;" placeholder="Nome da Instituição" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputStartTime" class="black-label font-weight-bold">Hora de Início</label>
                            <input type="time" class="form-control no-border custom-time-input" id="inputStartTime" name="hora_inicio" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEndTime" class="black-label font-weight-bold">Hora de Fim</label>
                            <input type="time" class="form-control no-border custom-time-input" id="inputEndTime" name="hora_fim" required>
                        </div>
                        <div class="form-group">
                            <label for="inputObservation" class="black-label font-weight-bold">Observação</label>
                            <input type="text" class="form-control no-border" id="inputObservation" name="observacao" style="background-color: white; color: black;" placeholder="Observação">
                        </div>
                        
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label black-label font-weight-bold" for="gridCheck">
                                Concordo com os termos e condições
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrar Entrada</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
