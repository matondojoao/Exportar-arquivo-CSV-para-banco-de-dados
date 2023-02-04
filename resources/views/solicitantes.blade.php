<!DOCTYPE html>
<html>
<head>
    <title>Exportar arquivo CSV para banco de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Exportar arquivo CSV para banco de dados</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('solicitantes.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" required>
                <br>
                <button class="btn btn-primary">Importar Dados</button>
            </form>
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="6">
                        Lista de Solicitantes
                        <a class="btn btn-danger float-end" href="{{ route('solicitantes.export') }}">Exportar Dados</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Nome / Razão Social</th>
                    <th>Nome fantasia</th>
                    <th>CPF / CNPJ</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
                @foreach($sols as $sol)
                <tr>
                    <td>{{ $sol->id }}</td>
                    <td>{{ $sol->nome }}</td>
                    <td>{{ $sol->nome_fantasia }}</td>
                    <td>{{ $sol->cnpj }}</td>
                    <td>{{ $sol->cidade }}</td>
                    <td>{{ $sol->estado }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

</body>
</html>
