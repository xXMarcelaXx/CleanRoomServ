<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-CR-L1-01  T1</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<nav class="navbar navbar-expand-lg bg-light" style="position: fixed; left: 0; right: 0; top: 0; width: 100%;">
  <div class="container-fluid">
    <img src="/images/R.png" alt="" id="logoborg">
    <div>
                        
    @auth                    
    <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
    auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
    @endauth
    <a href="turnos" class="btn btn-info" style="color: white">Volver</a>
    <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
    </div>
</div>
</nav>



<div class="container" >
    <br><br><br>
    <br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Reportes Turno 1</h1>
    <div class="container" id="contenedor-reportes">
        <div id="columna">
            <ol>
               <li><a href="{{route('rep11')}}">rep1-1</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
           </ol>             
        </div>
        <div id="columna">
            <ol start="7">
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
           </ol>             
        </div>
        <div id="columna">
            <ol start="13">
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
               <li><a href="#">Descargar</a></li>
           </ol>             
         </div>
          
    </div>
    <br><br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Reportes Turno 2</h1>
    <div class="container" id="contenedor-reportes">
    <div>
    <ul>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
        <li><a href="#">Descargar</a></li>
    </ul>          
    </div>
      
    </div>
    <br><br>
    <h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Reportes Turno 3</h1>
    <div class="container" id="contenedor-reportes">
        <ul>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
            <li><a href="#">Descargar</a></li>
        </ul> 
    </div>

</div>


</body>
</html>