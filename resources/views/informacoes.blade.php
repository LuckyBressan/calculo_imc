<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="text-center">
         <img src="{{asset('imc.jpg')}}" width="700">
        </div>
        <form action="{{url('/info')}}" method="get">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nascimento" class="form-label">Data de Nascimento:</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (Kg):</label>
                <input type="number" name="peso" id="peso" class="form-control" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura (M):</label>
                <input type="number" name="altura" id="altura" class="form-control" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="hora_dormida" class="form-label">Média de Horas Dormidas: </label>
                <input type="number" name="hora_dormida" id="hora_dormida" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>