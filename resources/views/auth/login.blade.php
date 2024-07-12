<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos gerais */
        body {
            background-color: #f8f9fa; /* Cor de fundo leve */
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura da tela cheia */
            margin: 0;
        }
        
        .container {
            max-width: 400px; /* Largura máxima da caixa do login */
            width: 100%;
            padding: 15px;
        }
        
        .card {
            background-color: #ffffff; /* Fundo branco para o card */
            border: 1px solid #dee2e6; /* Borda leve */
            border-radius: 10px; /* Cantos arredondados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }
        
        .card-header {
            background-color: #007bff; /* Fundo azul para o cabeçalho */
            color: white; /* Texto branco no cabeçalho */
            padding: 20px;
            border-bottom: 1px solid #007bff; /* Borda do cabeçalho */
            border-top-left-radius: 10px; /* Cantos arredondados no topo */
            border-top-right-radius: 10px; /* Cantos arredondados no topo */
        }
        
        .card-header img {
            display: block;
            margin: 0 auto 10px auto; /* Centralizar a imagem */
            width: 80px; /* Tamanho da imagem */
        }
        
        .card-body {
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        
        .form-control.is-invalid {
            border-color: #e3342f;
        }
        
        .invalid-feedback {
            display: block;
            color: #e3342f;
            font-size: 14px;
        }
        
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
        }
        
        .alert-danger ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        
        .alert-danger li {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <img src="{{ asset('assets/unilicungo/up.png') }}" alt="Logo">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" required>
                        @error('senha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-0 mt-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
