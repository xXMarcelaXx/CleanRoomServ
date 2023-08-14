<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <div>                    
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                @endauth
                
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
</nav>
<br><br><br>
<h1 style="text-align: center; color:white; background-color:rgb(29, 29, 29)">Op. 140</h1>
<br><br>
<div class="contenedor-turnos">
<a href="op140-prensa1-t68" class="btn" id="boton57">Prensa PMRTD</a>
<br><br>
<a href="op140-prensa2-t68" class="btn" id="boton68">Prensa OSP 111</a>
<br><br>
<a href="op140-prensa3-t68" class="btn" id="boton57">Prensa OSL 111 Y OSM</a>  
<br><br>
</div>
</body>
</html>