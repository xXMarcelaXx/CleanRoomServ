<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-40-L1-02-T3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
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
</head>

<body id="vistas">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <div>                    
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                @endauth
                <a href="F7-SETCS-ELE-40-L1-02-8T3" class="btn btn-info" style="color: white">Volver</a>
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
        </nav>
        <br>
    </div>
    <div class="table-responsive">
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
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                        <th>3</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Despues de cambio de modelo</p>
                            </th>
                        </tr>
                        @foreach ($registros as $key=>$registro)
                        <form action="{{route('finalcheckSETCS40223C8',$registro->id)}}" method="POST">                            
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == '6:00' &&
                                $registro->tipo == 'cumple')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <td>
                                        @php
                                            $fieldName = "registro[{$key}][d{$i}]";
                                            $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                        @endphp
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}"  value="Cumple" {{ $registro->{"d{$i}"} == 'Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Cumple" {{ $registro->{"d{$i}"} == 'No Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Aplica" {{ $registro->{"d{$i}"} == 'No Aplica' ? 'checked' : '' }} @if($disabled) disabled @endif> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="NP" {{ $registro->{"d{$i}"} == 'NP' ? 'checked' : '' }} @if($disabled) disabled @endif> NP
                                        </label>
                                    
                                    </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == '6:00' &&
                                $registro->tipo == 'rango')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                    </td>
                                </tr>
                            @endif
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == '6:00' &&
                                $registro->tipo == 'texto')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                            @endphp
                                            <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                                        </td>
                                    @endfor
                                </tr>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                        <th colspan="33" class="table-secondary">
                            <p align="center">Despues del cambio de modelo</p>
                        </th>                              
                        </tr>
                        @foreach ($registros as $key=>$registro)                          
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == 'CAMBIO1' &&
                                $registro->tipo == 'cumple')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <td>
                                        @php
                                            $fieldName = "registro[{$key}][d{$i}]";
                                            $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                        @endphp
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}"  value="Cumple" {{ $registro->{"d{$i}"} == 'Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Cumple" {{ $registro->{"d{$i}"} == 'No Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Aplica" {{ $registro->{"d{$i}"} == 'No Aplica' ? 'checked' : '' }} @if($disabled) disabled @endif> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="NP" {{ $registro->{"d{$i}"} == 'NP' ? 'checked' : '' }} @if($disabled) disabled @endif> NP
                                        </label>
                                    
                                    </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == 'CAMBIO1' &&
                                $registro->tipo == 'rango')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                    </td>
                                </tr>
                            @endif
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == 'CAMBIO1' &&
                                $registro->tipo == 'texto')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                            @endphp
                                            <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                                        </td>
                                    @endfor
                                </tr>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                         <th colspan="33" class="table-secondary">
                            <p align="center">Despues del cambio de modelo</p>
                        </th>                           
                        </tr>
                        @foreach ($registros as $key=>$registro)                          
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == 'CAMBIO2' &&
                                $registro->tipo == 'cumple')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <td>
                                        @php
                                            $fieldName = "registro[{$key}][d{$i}]";
                                            $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                        @endphp
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}"  value="Cumple" {{ $registro->{"d{$i}"} == 'Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Cumple" {{ $registro->{"d{$i}"} == 'No Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Aplica" {{ $registro->{"d{$i}"} == 'No Aplica' ? 'checked' : '' }} @if($disabled) disabled @endif> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="NP" {{ $registro->{"d{$i}"} == 'NP' ? 'checked' : '' }} @if($disabled) disabled @endif> NP
                                        </label>
                                    
                                    </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == 'CAMBIO2' &&
                                $registro->tipo == 'rango')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                    </td>
                                    <td>
                                        <input type="number" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                    </td>
                                </tr>
                            @endif
                            @if ($registro->turno == '3' &&
                                $registro->documentoid == 'F7-SETCS-ELE-40-L1-02-2-8' &&
                                $registro->partetabla == 'CAMBIO2' &&
                                $registro->tipo == 'texto')
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                            @endphp
                                            <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                                        </td>
                                    @endfor
                                </tr>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary" id="miBoton">Guardar Cambios</button>
                        </form>
                </table>
            <br><br><br><br><br><br><br><br>
        </div>
</body>
</html>