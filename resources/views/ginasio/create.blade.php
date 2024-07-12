@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 70px;"> <!-- Adiciona margem superior de 5px -->
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4"> <!-- Adicionado mt-4 para espaçamento na parte superior -->
             

            </div>
            <form method="POST" action="{{ route('ginasio.store') }}">
                @csrf
        

                        <div class="form-group">
                            <label for="entidade">Entidade</label>
                            <select class="form-control no-border custom-date-input" id="entidade" name="entidade" onchange="showInstituicaoField()">
                                <option value="">Selecione a Entidade</option>
                                <option value="Instituição">Instituição</option>
                                <option value="Escola">Escola</option>
                                <option value="Faculdade">Faculdade</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>

                        <div class="form-group" id="nomeInstituicaoField" style="display: none;">
                            <label for="nome_instituicao">Nome da Instituição</label>
                            <input type="text" class="form-control" id="nome_instituicao" name="nome_instituicao">
                        </div>

                        <div class="form-group">
                            <label for="nome_ocupante">Nome do Ocupante</label>
                            <input type="text" class="form-control" id="nome_ocupante" name="nome_ocupante" required>
                        </div>

                        <div class="form-group">
                            <label for="tipo_evento">Tipo de Evento</label>
                            <input type="text" class="form-control" id="tipo_evento" name="tipo_evento" required>
                        </div>

                        <div class="form-group">
                            <label for="data_evento">Data do Evento</label>
                            <input type="date" class="form-control" id="data_evento" name="data_evento" required>
                        </div>

                        <div class="form-row">
    <div class="form-group">
        <label for="hora_inicio">Hora de Início</label>
        <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
    </div>
    <div class="form-group">
        <label for="hora_fim">Hora de Fim</label>
        <input type="time" class="form-control" id="hora_fim" name="hora_fim" required>
    </div>
</div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="contacto">Contacto</label>
                                <input type="text" class="form-control" id="contacto" name="contacto" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="responsavel">Responsável</label>
                                <input type="text" class="form-control" id="responsavel" name="responsavel">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Criar Evento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
    function showInstituicaoField() {
        var entidade = document.getElementById("entidade").value;
        var nomeInstituicaoField = document.getElementById("nomeInstituicaoField");

        if (entidade !== "Outros" && entidade !== "") {
            nomeInstituicaoField.style.display = "block";
        } else {
            nomeInstituicaoField.style.display = "none";
        }
    }
</script>
@endsection
