<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rep2-4</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <style>
.fijar {
  /* Fija los encabezados de la tabla en la parte superior */
  position: sticky;
  left: 0;
  z-index: 1;
}
</style>
    <style>
        table, th, td {
  border: 0.5px solid black;
  border-collapse: collapse;
}
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

--------------------------------------------
hoja de chequeo F7-SETCS-ELE-40-L1-02-2-4
<!-- -------------- F7-SETCS-ELE-40-L1-02-2-4 INDEX Y REVERSO  -------------------->
<div style="page-break-after:always;">
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-40-L1-02')
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th>{{ $datoshoja->meie }}</th>
                            <th>Area</th>
                            <th>{{ $datoshoja->area }}</th>
                            <th>Lugar</th>
                            <th>{{ $datoshoja->lugar }}</th>
                            <th>Pagina</th>
                            <th>{{ $datoshoja->pagina }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                            <th>{{ $datoshoja->fecha }}</th>
                            <th>calidad</th>
                            <th>{{ $datoshoja->calidad }}</th>
                            <th>Linea</th>
                            <th>{{ $datoshoja->linea }}</th>
                            <th>Planta</th>
                            <th colspan="3">{{ $datoshoja->planta }}</th>
                        </tr>
                        <tr>
                            <th>{{ $datoshoja->revision }}</th>
                            <th>Manufactura</th>
                            <th>{{ $datoshoja->manufactura }}</th>
                            <th>Op #</th>
                            <th>{{ $datoshoja->operacion }}</th>
                            <th>Depto</th>
                            <th>{{ $datoshoja->departamento }}</th>
                            <th>No.Parte</th>
                            <th>{{ $datoshoja->numeroparte }}</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1">{{ $datoshoja->mes }}</th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3">{{ $datoshoja->año }}</th>
                        </tr>
                    @endif
                @endforeach
            </thead>
        </table>
        <div class="table-responsive" align="center">
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">A las 6:00 Hrs</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Despues de cambio de modelo</p>
                    </th>
                </tr>
                @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d4'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d4'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d5'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d5'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                <p style="color: green">{{ $registro['d6'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d6'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d8'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d8'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d10'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d10'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                <p style="color: green">{{ $registro['d11'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d11'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                <p style="color: green">{{ $registro['d14'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d14'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21']}}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21']}}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Despues de cambio de modelo</p>
                    </th>
                </tr>
                @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d4'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d4'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d5'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d5'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                <p style="color: green">{{ $registro['d6'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d6'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d8'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d8'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d10'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d10'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                <p style="color: green">{{ $registro['d11'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d11'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                <p style="color: green">{{ $registro['d14'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d14'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21']}}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21']}}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-4' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
<!-- --------------  REVERSO  -------------------->
<div style="page-break-after:always;">
    <table class="table table-success table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
                <th scope="col" rowspan="2">Descripcion de la falla</th>
                <th scope="col" rowspan="2">Se paro el proceso</th>
                <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
                <th scope="col" colspan="4">Liberacion auditor de calidad</th>
                <th scope="col" rowspan="2">Causa raiz asignable</th>
                <th scope="col" rowspan="2">Accion correctiva</th>
                <th scope="col">Responsable</th>
            </tr>
            <tr>
                <th scope="col">Muestreo de confirmacion</th>
                <th scope="col">Disposicion de material construido</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Nombre / firma</th>
                <th scope="col">Supv. de produccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reversos as $reverso)
            @if ($reverso->documentoid == "F7-SETCS-ELE-40-L1-02-2-4" && $reverso->turno == "2")
            <tr>
                <td>{{$reverso->fechahora}}</td>
                <td>{{$reverso->falla}}</td>
                <td>{{$reverso->proceso}}</td>
                <td>{{$reverso->porque}}</td>
                <td>{{$reverso->confirmacion}}</td>
                <td>{{$reverso->dispocision}}</td>
                <td>{{$reverso->Cantidad}}</td>
                <td>{{$reverso->nombre}}</td>
                <td>{{$reverso->causa}}</td>
                <td>{{$reverso->accion}}</td>
                <td>{{$reverso->responsable}}</td>
            </tr>                      
            @endif
            @endforeach
        </tbody>
    </table>
</div>


--------------------------------------------
hoja de chequeo F7-SETCS-ELE-40-L1-02-2-5
<!-- -------------- F7-SETCS-ELE-40-L1-02-2-5 INDEX Y REVERSO  -------------------->
<div style="page-break-after:always;">
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-40-L1-02')
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th>{{ $datoshoja->meie }}</th>
                            <th>Area</th>
                            <th>{{ $datoshoja->area }}</th>
                            <th>Lugar</th>
                            <th>{{ $datoshoja->lugar }}</th>
                            <th>Pagina</th>
                            <th>{{ $datoshoja->pagina }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                            <th>{{ $datoshoja->fecha }}</th>
                            <th>calidad</th>
                            <th>{{ $datoshoja->calidad }}</th>
                            <th>Linea</th>
                            <th>{{ $datoshoja->linea }}</th>
                            <th>Planta</th>
                            <th colspan="3">{{ $datoshoja->planta }}</th>
                        </tr>
                        <tr>
                            <th>{{ $datoshoja->revision }}</th>
                            <th>Manufactura</th>
                            <th>{{ $datoshoja->manufactura }}</th>
                            <th>Op #</th>
                            <th>{{ $datoshoja->operacion }}</th>
                            <th>Depto</th>
                            <th>{{ $datoshoja->departamento }}</th>
                            <th>No.Parte</th>
                            <th>{{ $datoshoja->numeroparte }}</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1">{{ $datoshoja->mes }}</th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3">{{ $datoshoja->año }}</th>
                        </tr>
                    @endif
                @endforeach
            </thead>
        </table>
        <div class="table-responsive" align="center">
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">A las 6:00 Hrs</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Despues de cambio de modelo</p>
                    </th>
                </tr>
                @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d4'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d4'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d5'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d5'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                <p style="color: green">{{ $registro['d6'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d6'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d8'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d8'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d10'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d10'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                <p style="color: green">{{ $registro['d11'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d11'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                <p style="color: green">{{ $registro['d14'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d14'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21']}}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21']}}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Despues de cambio de modelo</p>
                    </th>
                </tr>
                @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d4'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d4'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d5'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d5'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                <p style="color: green">{{ $registro['d6'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d6'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d8'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d8'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d10'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d10'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                <p style="color: green">{{ $registro['d11'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d11'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                <p style="color: green">{{ $registro['d14'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d14'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21']}}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21']}}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-5' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
<!-- --------------  REVERSO  -------------------->
<div style="page-break-after:always;">
    <table class="table table-success table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
                <th scope="col" rowspan="2">Descripcion de la falla</th>
                <th scope="col" rowspan="2">Se paro el proceso</th>
                <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
                <th scope="col" colspan="4">Liberacion auditor de calidad</th>
                <th scope="col" rowspan="2">Causa raiz asignable</th>
                <th scope="col" rowspan="2">Accion correctiva</th>
                <th scope="col">Responsable</th>
            </tr>
            <tr>
                <th scope="col">Muestreo de confirmacion</th>
                <th scope="col">Disposicion de material construido</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Nombre / firma</th>
                <th scope="col">Supv. de produccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reversos as $reverso)
            @if ($reverso->documentoid == "F7-SETCS-ELE-40-L1-02-2-5" && $reverso->turno == "2")
            <tr>
                <td>{{$reverso->fechahora}}</td>
                <td>{{$reverso->falla}}</td>
                <td>{{$reverso->proceso}}</td>
                <td>{{$reverso->porque}}</td>
                <td>{{$reverso->confirmacion}}</td>
                <td>{{$reverso->dispocision}}</td>
                <td>{{$reverso->Cantidad}}</td>
                <td>{{$reverso->nombre}}</td>
                <td>{{$reverso->causa}}</td>
                <td>{{$reverso->accion}}</td>
                <td>{{$reverso->responsable}}</td>
            </tr>                      
            @endif
            @endforeach
        </tbody>
    </table>
</div>


--------------------------------------------
hoja de chequeo F7-SETCS-ELE-40-L1-02-2-6
<!-- -------------- F7-SETCS-ELE-40-L1-02-2-6  INDEX Y REVERSO  -------------------->
<div style="page-break-after:always;">
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-40-L1-02')
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th>{{ $datoshoja->meie }}</th>
                            <th>Area</th>
                            <th>{{ $datoshoja->area }}</th>
                            <th>Lugar</th>
                            <th>{{ $datoshoja->lugar }}</th>
                            <th>Pagina</th>
                            <th>{{ $datoshoja->pagina }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                            <th>{{ $datoshoja->fecha }}</th>
                            <th>calidad</th>
                            <th>{{ $datoshoja->calidad }}</th>
                            <th>Linea</th>
                            <th>{{ $datoshoja->linea }}</th>
                            <th>Planta</th>
                            <th colspan="3">{{ $datoshoja->planta }}</th>
                        </tr>
                        <tr>
                            <th>{{ $datoshoja->revision }}</th>
                            <th>Manufactura</th>
                            <th>{{ $datoshoja->manufactura }}</th>
                            <th>Op #</th>
                            <th>{{ $datoshoja->operacion }}</th>
                            <th>Depto</th>
                            <th>{{ $datoshoja->departamento }}</th>
                            <th>No.Parte</th>
                            <th>{{ $datoshoja->numeroparte }}</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1">{{ $datoshoja->mes }}</th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3">{{ $datoshoja->año }}</th>
                        </tr>
                    @endif
                @endforeach
            </thead>
        </table>
        <div class="table-responsive" align="center">
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">A las 6:00 Hrs</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == '6:00' &&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Despues de cambio de modelo</p>
                    </th>
                </tr>
                @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d4'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d4'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d5'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d5'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                <p style="color: green">{{ $registro['d6'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d6'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d8'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d8'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d10'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d10'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                <p style="color: green">{{ $registro['d11'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d11'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                <p style="color: green">{{ $registro['d14'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d14'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21']}}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21']}}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == 'CAMBIO1' &&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Despues de cambio de modelo</p>
                    </th>
                </tr>
                @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'cumple')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d4'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d4'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d5'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d5'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d5'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d6'] == 'Cumple')
                                <p style="color: green">{{ $registro['d6'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d6'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d7'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d8'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d8'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d9'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d10'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d10'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d11'] == 'Cumple')
                                <p style="color: green">{{ $registro['d11'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d11'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d12'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] == 'Cumple')
                                <p style="color: green">{{ $registro['d14'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d14'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d15'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d21']}}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21']}}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] == 'Cumple')
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'rango')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d1'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d1'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d2'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d2'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d3'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d3'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d4'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d4'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d5'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d5'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d6'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d6'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d7'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d7'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d8'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d8'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d9'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d9'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                <p style="color: green">{{ $registro['d10'] }}</p>
                            @else
                                <p style="color: red">{{ $registro['d10'] }}</p>
                            @endif
                            </td>
                            <td>
                                @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d11'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d11'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d12'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d12'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d13'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d13'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d14'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d14'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d15'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d15'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d16'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d16'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d17'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d17'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d18'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d18'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d19'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d19'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d20'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d20'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d21'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d21'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d22'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d22'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d23'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d23'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d24'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d24'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d25'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d25'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d26'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d26'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d27'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d27'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d28'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d28'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d29'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d29'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d30'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d30'] }}</p>
                                @endif
                            </td>
                            <td>
                                @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                    <p style="color: green">{{ $registro['d31'] }}</p>
                                @else
                                    <p style="color: red">{{ $registro['d31'] }}</p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-6' &&
                        $registro->partetabla == 'CAMBIO2'&&
                        $registro->tipo == 'texto')
                        <tr>
                            <td>{{ $registro->criterio }}</td>
                            <td>
                                <p>{{ $registro['d1'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d2'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d3'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d4'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d5'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d6'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d7'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d8'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d9'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d10'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d11'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d12'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d13'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d14'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d15'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d16'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d17'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d18'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d19'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d20'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d21'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d22'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d23'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d24'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d25'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d26'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d27'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d28'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d29'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d30'] }}</p>
                            </td>
                            <td>
                                <p>{{ $registro['d31'] }}</p>
                            </td>
                        </tr>
                    @endif
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
<!-- --------------  REVERSO  -------------------->
<div style="page-break-after:always;">
    <thead>
        <tr>
            <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
            <th scope="col" rowspan="2">Descripcion de la falla</th>
            <th scope="col" rowspan="2">Se paro el proceso</th>
            <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
            <th scope="col" colspan="4">Liberacion auditor de calidad</th>
            <th scope="col" rowspan="2">Causa raiz asignable</th>
            <th scope="col" rowspan="2">Accion correctiva</th>
            <th scope="col">Responsable</th>
        </tr>
        <tr>
            <th scope="col">Muestreo de confirmacion</th>
            <th scope="col">Disposicion de material construido</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Nombre / firma</th>
            <th scope="col">Supv. de produccion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reversos as $reverso)
        @if ($reverso->documentoid == "F7-SETCS-ELE-40-L1-02-2-6" && $reverso->turno == "2")
        <tr>
            <td>{{$reverso->fechahora}}</td>
            <td>{{$reverso->falla}}</td>
            <td>{{$reverso->proceso}}</td>
            <td>{{$reverso->porque}}</td>
            <td>{{$reverso->confirmacion}}</td>
            <td>{{$reverso->dispocision}}</td>
            <td>{{$reverso->Cantidad}}</td>
            <td>{{$reverso->nombre}}</td>
            <td>{{$reverso->causa}}</td>
            <td>{{$reverso->accion}}</td>
            <td>{{$reverso->responsable}}</td>
        </tr>                      
        @endif
        @endforeach
    </tbody>
</table>
</div>


--------------------------------------------
hoja de chequeo F7-SETCS-ELE-60-L1-01-1
<!-- -------------- F7-SETCS-ELE-60-L1-01-1  INDEX Y REVERSO  -------------------->
<div style="page-break-after:always;">
    <div class="table-responsive" align="center">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                @if ($datoshoja->documentoid == 'F7-SETCS-ELE-60-L1-01')
                    <tr>
                        <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                        <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                        <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                        <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                    </tr>
                    <tr>
                        <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                    </tr>
                    <tr>
                        <th>No. de cambio</th>
                        <th>Fecha</th>
                        <th>ME/IE</th>
                        <th>{{ $datoshoja->meie }}</th>
                        <th>Area</th>
                        <th>{{ $datoshoja->area }}</th>
                        <th>Lugar</th>
                        <th>{{ $datoshoja->lugar }}</th>
                        <th>Pagina</th>
                        <th>{{ $datoshoja->pagina }}</th>
                    </tr>
                    <tr>
                        <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                        <th>{{ $datoshoja->fecha }}</th>
                        <th>calidad</th>
                        <th>{{ $datoshoja->calidad }}</th>
                        <th>Linea</th>
                        <th>{{ $datoshoja->linea }}</th>
                        <th>Planta</th>
                        <th colspan="3">{{ $datoshoja->planta }}</th>
                    </tr>
                    <tr>
                        <th>{{ $datoshoja->revision }}</th>
                        <th>Manufactura</th>
                        <th>{{ $datoshoja->manufactura }}</th>
                        <th>Op #</th>
                        <th>{{ $datoshoja->operacion }}</th>
                        <th>Depto</th>
                        <th>{{ $datoshoja->departamento }}</th>
                        <th>No.Parte</th>
                        <th>{{ $datoshoja->numeroparte }}</th>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align: end">Mes:</th>
                        <th colspan="1">{{ $datoshoja->mes }}</th>
                        <th colspan="3" style="text-align: end">Año:</th>
                        <th colspan="3">{{ $datoshoja->año }}</th>
                    </tr>
                    <tr>
                        <th>accion</th>
                        <th>
                        </th>
                        <th colspan="30"></th>
                    </tr>
                @endif
            @endforeach
        </thead>
    </table>
     <div class="table-responsive" align="center">
        <table class="table table-success table-bordered">
            <thead>
                <tr>
                    <th colspan="33" class="table-secondary">
                        <p align="center">Formato de Send-Ahead para Serpentín TODOS LOS MODELOS</p>
                    </th>
                </tr>
            </thead>
            @foreach ($registros as $registro)
            @if ($registro->turno == '2' &&
                $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                $registro->partetabla == 'formato')
                <tbody>                        
                    <tr>
                        <th colspan="2">Fecha:</th>
                        <th colspan="2">{{ $registro['d1'] }}</th>
                        <th colspan="2">Hora:</th>
                        <th colspan="2">{{ $registro['d2'] }}</th>
                        <th colspan="2">  </th>
                        <th colspan="2">Lote de Tinta </th>
                        <th colspan="4">{{ $registro['d3'] }}</th>
                        <th colspan="2">  </th>
                    </tr>
                    <tr>
                        <th>Operador:</th>
                        <th colspan="5">{{ $registro['d4'] }}</th>
                        <th colspan="18">  </th>
                    </tr>
                    <tr>
                        <th>Tecnico de setup:</th>
                        <th colspan="5">{{ $registro['d5'] }}</th>
                        <th colspan="4">  </th>
                        <th>Frasco # </th>
                        <th colspan="2">{{ $registro['d6'] }}</th>
                        <th>Viscocidad </th>
                        <th colspan="7">{{ $registro['d7'] }}</th>
                    </tr>
                    <tr>
                        <th>Modelo:</th>
                        <th colspan="5">{{ $registro['d8'] }}</th>
                        <th colspan="4">  </th>
                        <th>Peso Inicial </th>
                        <th colspan="2">{{ $registro['d9'] }}</th>
                        <th>Peso Final </th>
                        <th colspan="7">{{ $registro['d10'] }}</th>
                    </tr>
                    <tr>
                        <th colspan="9"><p align="center">Primera Pasada</p></th>
                        <th colspan="10"><p align="center">Segunda Pasada</p></th>
                    </tr>
                    <tr>
                        <td colspan="1">Impresora: </td>
                        <td colspan="1">{{ $registro['d11'] }}</td>
                        <td colspan="1">Serps: </td>
                        <td colspan="1">{{ $registro['d12'] }}</td>
                        <td colspan="1">Leads: </td>
                        <td colspan="2">{{ $registro['d13'] }}</td>
                        <th colspan="2">  </th>
                        <td colspan="1">Impresora: </td>
                        <td colspan="2">{{ $registro['d14'] }}</td>
                        <td colspan="1">Serps: </td>
                        <td colspan="2">{{ $registro['d15'] }}</td>
                        <td colspan="1">Leads: </td>
                        <td colspan="5">{{ $registro['d16'] }}</td>
                    </tr>
                    <tr>
                        <td colspan="1">Velocidad: </td>
                        <td colspan="1">{{ $registro['d17'] }}</td>
                        <td colspan="1">Presion: </td>
                        <td colspan="1">{{ $registro['d18'] }}</td>
                        <td colspan="1">Snap-Off: </td>
                        <td colspan="2">{{ $registro['d19'] }}</td>
                        <th colspan="2">  </th>
                        <td colspan="1">Velocidad: </td>
                        <td colspan="2">{{ $registro['d20'] }}</td>
                        <td colspan="1">Presion: </td>
                        <td colspan="2">{{ $registro['d21'] }}</td>
                        <td colspan="1">Snap-Off: </td>
                        <td colspan="5">{{ $registro['d22'] }}</td>
                    </tr>
                    <tr>
                        <th colspan="1">Grupo</th>                                                      
                        <th colspan="1">Numero de Tile</th>
                        <th colspan="1">Detalle de Pantalla</th>
                        <th colspan="1">Peso de Hoja con Tinta</th>
                        <th colspan="1">Peso Solicitado 1er Impresión</th>
                        <th colspan="1">Medicion de localizacion serpentin OSMa/OSMaG2
                            (Firma tecnico)</th>
                        <th colspan="1">Velocidad</th>
                        <th colspan="1">Presion</th>
                        <th colspan="1">Snap Off</th>
                        <th colspan="1"></th>
                        <th colspan="1">Numero de Tile</th>
                        <th colspan="1">Detalle de Pantalla</th>
                        <th colspan="1">Peso de Hoja con Tinta</th>
                        <th colspan="1">Peso Solicitado 1er Impresión</th>
                        <th colspan="1">Medicion de localizacion serpentin OSMa/OSMaG2
                            (Firma tecnico)</th>
                        <th colspan="1">Velocidad</th>
                        <th colspan="1">Presion</th>
                        <th colspan="1">Snap Off</th>
                    </tr>
                @endif
                @endforeach
                    @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == '1-2-3')
                    <tr>
                        <th rowspan="5">1</th>
                        <th colspan="1">1</th>
                        <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d4'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d5'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d6'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d7'] }}</p></td>
                        <td colspan="1"></td>
                        <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d11'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d12'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d13'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d14'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d15'] }}</p></td>                            
                    </tr>
                    <tr>
                        <th>2</th>
                        <td colspan="1"><p>{{ $registro['d16'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d17'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d18'] }}</p></td>
                        <td colspan="1"></td>
                        <td colspan="1"><p>{{ $registro['d19'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d23'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d24'] }}</p></td>
                        <td colspan="1"></td>
                        <td colspan="1"><p>{{ $registro['d25'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d26'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d27'] }}</p></td>
                    @endif
                    @endforeach
                    </tr>
                    @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == 'HE1-HE2-4')
                    <tr>
                        <th>Hoja Extra 1</th>
                        <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                        <td colspan="1"></td>
                        <td colspan="1"><p>{{ $registro['d4'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d5'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d6'] }}</p></td>
                    </tr>
                    <tr>
                        <th>Hoja Extra 2</th>
                        <td colspan="1"><p>{{ $registro['d7'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                        <td colspan="1"></td>
                        <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d11'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d12'] }}</p></td>
                    </tr>
                    <tr>
                        <th rowspan="5">2</th>
                        <th colspan="1">4</th>
                        <td colspan="1"><p>{{ $registro['d13'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d14'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d15'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d16'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d17'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d18'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d19'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d23'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d24'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d25'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d26'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d27'] }}</p></td>
                    @endif
                    @endforeach
                    </tr>
                    @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == '5-6-HE3-HE4')
                    <tr>
                        <th>5</th>
                        <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d4'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d5'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d6'] }}</p></td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td colspan="1"><p>{{ $registro['d7'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d11'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d12'] }}</p></td>
                    </tr>
                    <tr>
                        <th>Hoja Extra 3</th>
                        <td colspan="1"><p>{{ $registro['d13'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d14'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d15'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d16'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d17'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d18'] }}</p></td>
                    </tr>
                    <tr>
                        <th>Hoja Extra 4</th>
                        <td colspan="1"><p>{{ $registro['d19'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d23'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d24'] }}</p></td>
                    @endif
                    @endforeach
                    </tr>
                    @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == '7-8-9')
                    <tr>
                        <th rowspan="5">3</th>
                        <th>7</th>
                        <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d4'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d5'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d6'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d7'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d11'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d12'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d13'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d14'] }}</p></td>
                        <td rowspan="5" colspan="1"><p>{{ $registro['d15'] }}</p></td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td colspan="1"><p>{{ $registro['d16'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d17'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d18'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d19'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d23'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d24'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d25'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d26'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d27'] }}</p></td>
                    @endif
                    @endforeach
                    </tr>
                    @foreach ($registros as $registro)
                    @if ($registro->turno == '2' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == 'HE5-HE6')
                    <tr>
                        <th>Hoja Extra 5</th>
                        <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d4'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d5'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d6'] }}</p></td>
                    </tr>
                    <tr>
                        <th>Hoja Extra 6</th>
                        <td colspan="1"><p>{{ $registro['d7'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                        <th colspan="1"></th>
                        <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d11'] }}</p></td>
                        <td colspan="1"><p>{{ $registro['d12'] }}</p></td>
                    @endif
                        @endforeach
                    </tbody>
        </table>
    </div>
</div>
<!-- --------------  REVERSO  -------------------->
<div style="page-break-after:always;">
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <table class="table table-success table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
                    <th scope="col" rowspan="2">Descripcion de la falla</th>
                    <th scope="col" rowspan="2">Se paro el proceso</th>
                    <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
                    <th scope="col" colspan="4">Liberacion auditor de calidad</th>
                    <th scope="col" rowspan="2">Causa raiz asignable</th>
                    <th scope="col" rowspan="2">Accion correctiva</th>
                    <th scope="col">Responsable</th>
                </tr>
                <tr>
                    <th scope="col">Muestreo de confirmacion</th>
                    <th scope="col">Disposicion de material construido</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Nombre / firma</th>
                    <th scope="col">Supv. de produccion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reversos as $reverso)
                @if ($reverso->documentoid == "F7-SETCS-ELE-60-L1-01-1" && $reverso->turno == "2")
                <tr>
                    <td>{{$reverso->fechahora}}</td>
                    <td>{{$reverso->falla}}</td>
                    <td>{{$reverso->proceso}}</td>
                    <td>{{$reverso->porque}}</td>
                    <td>{{$reverso->confirmacion}}</td>
                    <td>{{$reverso->dispocision}}</td>
                    <td>{{$reverso->Cantidad}}</td>
                    <td>{{$reverso->nombre}}</td>
                    <td>{{$reverso->causa}}</td>
                    <td>{{$reverso->accion}}</td>
                    <td>{{$reverso->responsable}}</td>
                </tr>                      
                @endif
                @endforeach
            </tbody>
        </table>
</div>


--------------------------------------------
hoja de chequeo F7-SETCS-ELE-60-L1-06-1-1-1
<!-- -------------- F7-SETCS-ELE-60-L1-06-1-1-1  INDEX Y REVERSO  -------------------->
<div style="page-break-after:always;">              
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-60-L1-06')
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th>{{ $datoshoja->meie }}</th>
                            <th>Area</th>
                            <th>{{ $datoshoja->area }}</th>
                            <th>Lugar</th>
                            <th>{{ $datoshoja->lugar }}</th>
                            <th>Pagina</th>
                            <th>{{ $datoshoja->pagina }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                            <th>{{ $datoshoja->fecha }}</th>
                            <th>calidad</th>
                            <th>{{ $datoshoja->calidad }}</th>
                            <th>Linea</th>
                            <th>{{ $datoshoja->linea }}</th>
                            <th>Planta</th>
                            <th colspan="3">{{ $datoshoja->planta }}</th>
                        </tr>
                        <tr>
                            <th>{{ $datoshoja->revision }}</th>
                            <th>Manufactura</th>
                            <th>{{ $datoshoja->manufactura }}</th>
                            <th>Op #</th>
                            <th>{{ $datoshoja->operacion }}</th>
                            <th>Depto</th>
                            <th>{{ $datoshoja->departamento }}</th>
                            <th>No.Parte</th>
                            <th>{{ $datoshoja->numeroparte }}</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1">{{ $datoshoja->mes }}</th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3">{{ $datoshoja->año }}</th>
                        </tr>
                    @endif
                @endforeach
            </thead>
        </table>
        <div class="table-responsive" align="center">
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Inicio de turno</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-60-L1-06-1-1-1' &&
                                $registro->partetabla == 'INICIO')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] == 'Cumple')
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Ajustes por mantenimiento</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-60-L1-06-1-1-1' &&
                                $registro->partetabla == 'AJUSTES')
                                <tr>
          <td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($registro['d1'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d1'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d1'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d2'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d2'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d2'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d3'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d3'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d3'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d4'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d4'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d4'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d5'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d5'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d5'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d6'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d6'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d6'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d7'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d7'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d7'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d8'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d8'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d8'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d9'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d9'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d9'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d10'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d10'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d10'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d11'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d11'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d11'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d12'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d12'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d12'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d13'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d13'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d13'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d14'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d14'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d14'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d15'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d15'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d15'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d16'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d16'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d16'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d17'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d17'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d17'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d18'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d18'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d18'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d19'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d19'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d19'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d20'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d20'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d20'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d21'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d21']}}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d21']}}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d22'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d22'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d22'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d23'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d23'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d23'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d24'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d24'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d24'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d25'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d25'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d25'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d26'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d26'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d26'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d27'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d27'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d27'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d28'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d28'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d28'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d29'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d29'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d29'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d30'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d30'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d30'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d31'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d31'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d31'] }}</p>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Inicio de turno / Cambio de modelo / Set up #1</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-60-L1-06-1-1-1' &&
                                $registro->partetabla == '#1')
                                <tr>
             <td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($registro['d1'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d1'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d1'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d2'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d2'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d2'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d3'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d3'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d3'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d4'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d4'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d4'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d5'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d5'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d5'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d6'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d6'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d6'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d7'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d7'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d7'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d8'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d8'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d8'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d9'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d9'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d9'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d10'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d10'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d10'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d11'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d11'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d11'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d12'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d12'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d12'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d13'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d13'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d13'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d14'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d14'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d14'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d15'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d15'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d15'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d16'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d16'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d16'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d17'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d17'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d17'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d18'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d18'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d18'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d19'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d19'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d19'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d20'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d20'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d20'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d21'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d21']}}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d21']}}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d22'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d22'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d22'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d23'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d23'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d23'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d24'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d24'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d24'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d25'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d25'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d25'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d26'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d26'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d26'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d27'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d27'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d27'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d28'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d28'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d28'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d29'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d29'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d29'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d30'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d30'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d30'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d31'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d31'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d31'] }}</p>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Inicio de turno / Cambio de modelo / Set up #2</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-60-L1-06-1-1-1' &&
                                $registro->partetabla == '#2')
                                <tr>
          <td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($registro['d1'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d1'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d1'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d2'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d2'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d2'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d3'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d3'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d3'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d4'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d4'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d4'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d5'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d5'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d5'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d6'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d6'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d6'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d7'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d7'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d7'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d8'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d8'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d8'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d9'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d9'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d9'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d10'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d10'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d10'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d11'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d11'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d11'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d12'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d12'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d12'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d13'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d13'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d13'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d14'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d14'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d14'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d15'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d15'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d15'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d16'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d16'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d16'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d17'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d17'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d17'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d18'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d18'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d18'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d19'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d19'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d19'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d20'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d20'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d20'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d21'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d21']}}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d21']}}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d22'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d22'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d22'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d23'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d23'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d23'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d24'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d24'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d24'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d25'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d25'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d25'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d26'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d26'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d26'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d27'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d27'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d27'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d28'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d28'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d28'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d29'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d29'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d29'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d30'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d30'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d30'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d31'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d31'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d31'] }}</p>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
<!-- --------------  REVERSO  -------------------->
<div style="page-break-after:always;">
    <table class="table table-success table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
                <th scope="col" rowspan="2">Descripcion de la falla</th>
                <th scope="col" rowspan="2">Se paro el proceso</th>
                <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
                <th scope="col" colspan="4">Liberacion auditor de calidad</th>
                <th scope="col" rowspan="2">Causa raiz asignable</th>
                <th scope="col" rowspan="2">Accion correctiva</th>
                <th scope="col">Responsable</th>
            </tr>
            <tr>
                <th scope="col">Muestreo de confirmacion</th>
                <th scope="col">Disposicion de material construido</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Nombre / firma</th>
                <th scope="col">Supv. de produccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reversos as $reverso)
            @if ($reverso->documentoid == "F7-SETCS-ELE-60-L1-06-1-1-1" && $reverso->turno == "1")
            <tr>
                <td>{{$reverso->fechahora}}</td>
                <td>{{$reverso->falla}}</td>
                <td>{{$reverso->proceso}}</td>
                <td>{{$reverso->porque}}</td>
                <td>{{$reverso->confirmacion}}</td>
                <td>{{$reverso->dispocision}}</td>
                <td>{{$reverso->Cantidad}}</td>
                <td>{{$reverso->nombre}}</td>
                <td>{{$reverso->causa}}</td>
                <td>{{$reverso->accion}}</td>
                <td>{{$reverso->responsable}}</td>
            </tr>                      
            @endif
            @endforeach
        </tbody>
    </table>
</div>

</body>

</html>