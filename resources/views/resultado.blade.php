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
        <div class="mb-3">
            <a href="{{url('/')}}" name="voltar" class="btn btn-primary">Voltar</a>
        </div>
        <div class="position-relative">
            <div class="position-absolute top-0 start-0">
                <img src="{{asset('user.png')}}" width="100" alt=""><br>
                &nbsp; <h3 style="text-transform:uppercase;" class="text-center">{{$nome}}</h3>
            </div>
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <img src="{{asset('calendario.png')}}" width="100" alt=""><br>
                &nbsp; <h3 style="text-transform:uppercase;" class="text-center">{{$idade}}</h3>
            </div>
            <div class="position-absolute top-0 end-0">
                <img src="{{asset('altura.png')}}" width="100" alt=""><br>
                &nbsp; <h3 style="text-transform:uppercase;" class="text-center">{{$altura}}</h3>
            </div>
            <div class="position-absolute top-50 start-0 translate-middle-y">
                <img src="{{asset('peso.png')}}" width="100"><br>
            </div>
        </div>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>