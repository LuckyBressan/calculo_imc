<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <br><br>
        <div class="position-relative">
            <div class="position-absolute top-0 start-0">
                <div class="text-center"><img src="{{asset('user.png')}}" width="100" alt=""></div>
                &nbsp; <h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$nome}}</h3>
            </div>
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <div class="text-center"><img src="{{asset('calendario.png')}}" width="100" alt=""></div>
                &nbsp; <h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$idade}} anos</h3>
            </div>
            <div class="position-absolute top-0 end-0">
                <div class="text-center"><img src="{{asset('altura.png')}}" width="100" alt=""></div>
                &nbsp; <h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$altura}} m</h3>
            </div>
            <div class="esquerda-baixo">
                <div class="text-center"><img src="{{asset('kg.png')}}" width="100"></div>
                &nbsp; <h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$peso}} kg</h3>
            </div>
            <div class="meio-baixo">
                <div class="text-center"><img src="{{asset('imc.png')}}" width="100"></div>
                &nbsp; <h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$imc}}</h3>
            </div>
            <div class="direita-baixo">
                <div class="text-center"><img src="{{asset('definicao.png')}}"  width="100"></div>
                &nbsp;<h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$definicao}}</h3>
            </div>
            <div class="horas_sono">
                <div class="text-center"><img src="{{asset('hora.png')}}"  width="100"></div>
                &nbsp;<h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$hora_sono}}H</h3>
            </div>
            <div class="qualidade_sono">
                <div class="text-center"><img src="{{asset('qualidade.png')}}"  width="100"></div>
                &nbsp;<h3 style="text-transform:uppercase; color: #023e8a;" class="text-center">{{$sono}}</h3>
            </div>
            <div class="botao-position text-center">
                <a href="{{url('/')}}" name="voltar" >
                    <input type="button" value="Voltar" class="btn btn-primary">
                </a>
            </div>
        </div>
     
       
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>