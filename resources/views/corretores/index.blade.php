<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Cadastro de Corretores</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/cadastrar" method="POST" class="mb-4" onsubmit="return validarFormulario()">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" required value="{{ old('nome') }}">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" minlength="1" maxlength="11" required value="{{ old('cpf') }}">
        </div>

        <div class="mb-3">
            <label for="creci" class="form-label">Creci:</label>
            <input type="text" class="form-control" maxlength="5" name="creci" required value="{{ old('creci') }}">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <h2 class="mb-4">Lista de Corretores</h2>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Creci</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($corretores as $corretor)
            <tr>
                <td>{{ $corretor->id }}</td>
                <td>{{ $corretor->nome }}</td>
                <td>{{ $corretor->cpf }}</td>
                <td>{{ $corretor->creci }}</td>
                <td>
                    <a href="/editar/{{ $corretor->id }}" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/excluir/{{ $corretor->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/cpfValidator.js') }}"></script>
</body>
</html>
