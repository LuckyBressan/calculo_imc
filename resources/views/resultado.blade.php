<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td scope='col'>Nome</td>
                    <td scope='col'>Idade</td>
                    <td scope='col'>Altura</td>
                    <td scope='col'>Peso</td>
                    <td scope='col'>IMC</td>
                    <td scope='col'>Definição</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$nome}}</td>
                    <td>{{$idade}}</td>
                    <td>{{$altura}}</td>
                    <td>{{$peso}}</td>
                    <td>{{$imc}}</td>
                    <td>{{$definicao}}</td>
                </tr>
            </tbody>
        </table> <br><br>
        <div class="mb-3">
            <a href="{{url('/')}}" name="voltar" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>