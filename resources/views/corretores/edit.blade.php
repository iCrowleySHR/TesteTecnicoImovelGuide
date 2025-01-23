<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Corretor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Editar Corretor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('corretores.update', $corretor->id) }}" method="POST" class="mb-4" onsubmit="return validarFormulario()">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" required value="{{ old('nome', $corretor->nome) }}">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf" maxlength="11" required value="{{ old('cpf', $corretor->cpf) }}">
        </div>

        <div class="mb-3">
            <label for="creci" class="form-label">Creci:</label>
            <input type="text" class="form-control" name="creci" minlength="1" maxlength="5" required value="{{ old('creci', $corretor->creci) }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/cpfValidator.js') }}"></script>
</body>
</html>
