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
            <form action="{{ route('produtos.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" required>
                <br>
                <button class="btn btn-primary">Importar Dados</button>
            </form>
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="6">
                        Lista de Produtos
                        <a class="btn btn-danger float-end" href="{{ route('produtos.export') }}">Exportar Dados</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Un</th>
                    <th>Ativo</th>
                    <th>Cód. Barras</th>
                    <th>Valor Médio</th>
                </tr>
                @foreach($prods as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->nome }}</td>
                    <td>{{ $prod->unidade }}</td>
                      @if( $prod->ativo ==1)
                       <td>Sim</td>
                      @else
                       <td>Não</td>
                      @endif
                    <td>{{ $prod->codbarras }}</td>
                    <td>{{ $prod->prvenda }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

</body>
</html>
