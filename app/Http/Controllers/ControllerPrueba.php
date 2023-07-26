<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\option;
use App\Models\Reverso;
use Illuminate\Http\Request;
use App\Jobs\hojasTurno1;
use App\Jobs\hojasTurno2;
use App\Jobs\hojasTurno3;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Datoshoja;
use App\Models\Registro;
use PDF;
use Illuminate\Support\Facades\Artisan;

class ControllerPrueba extends Controller
{
    
    public function prueba2()
    {
        // Establecer el tiempo máximo de ejecución a 300 segundos (5 minutos)
        ini_set('max_execution_time', 900);
        

        $carbon = Carbon::now('America/Monterrey');
        $fecha = $carbon->format('d');

        dd($fecha);
        $message = $fecha;
        Log::info($message);

        $opcion = "No Cumple";
        dd($opcion);

        return view('prueba', compact('opcion', 'fecha'));
    }

    public function pruebaBotones()
    {

        $carbon = Carbon::now('America/Monterrey');
        $diaString = $carbon->format('d');
        $dia = intval($diaString);

        $opcion = "NP";

        return view('prueba')->with('dia',$dia)->with('registro',$opcion);
    }

    public function pruebaPDFJJJJJ()
    {
        return view('pruebaPDF');
    }

   /* public function prueba()
    {
        $reversos = Reverso::all();
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('hojaschequeo.hojas5-7.F7-SETCS-ELE-20-L1-01-1.printreverso');
        $pdf->setPaper('b4','landscape');
        return $pdf-> stream('Reverso-F7-SETCS-ELE-20-L1-01-1.pdf');
    } */

    public function prueba()
    {
        hojasTurno1::dispatch();

        $message = 'entro al JOB';
        Log::info($message);
 
        $saludo = 'Saludo de prueba';
        return view('pruebaPDF')->with('saludo',$saludo);
    }


    public function pruebita()
    {
        $carbon = Carbon::now('America/Monterrey');
        $diaString = $carbon->format('d');
        $dia = intval($diaString);
 
        return view('pruebita')->with('dia',$dia);
    }

    public function pruebaPDF()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('pruebaPDF');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('pruebaPDF.pdf');
    }

    public function limpiarCache(){
        \Artisan::call('route:cache');
        \Artisan::call('config:cache');
        \Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        \Artisan::call('optimize:clear');
        return view('limpio');
    }


    public function reportes()
    {
        return view('reportes.index');
    }

    public function rep1_1()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-1');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-1.pdf');
    }

    public function rep1_2()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-2');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-2.pdf');
    }

    public function rep1_3()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-3');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-3.pdf');
    }

    public function rep1_4()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-4');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-4.pdf');
    }

    public function rep1_5()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-5');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-5.pdf');
    }
    
    public function rep1_6()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-6');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-6.pdf');
    }

    public function rep1_7()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-7');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-7.pdf');
    }

    public function rep1_8()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-8');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-8.pdf');
    }

    public function rep1_9()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-9');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-9.pdf');
    }

    public function rep1_10()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-10');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-10.pdf');
    }
    
    public function rep1_11()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-11');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-11.pdf');
    }
    public function rep1_12()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-12');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-12.pdf');
    }
    public function rep1_13()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep1-13');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep1-13.pdf');
    }

    public function rep2_1()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-1');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-1.pdf');
    }

    public function rep2_2()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-2');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-2.pdf');
    }

    public function rep2_3()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-3');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-3.pdf');
    }

    public function rep2_4()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-4');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-4.pdf');
    }

    public function rep2_5()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-5');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-5.pdf');
    }
    
    public function rep2_6()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-6');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-6.pdf');
    }

    public function rep2_7()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-7');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-7.pdf');
    }

    public function rep2_8()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-8');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-8.pdf');
    }

    public function rep2_9()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-9');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-9.pdf');
    }

    public function rep2_10()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-10');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-10.pdf');
    }
    
    public function rep2_11()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-11');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-11.pdf');
    }
    public function rep2_12()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-12');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-12.pdf');
    }
    public function rep2_13()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep2-13');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep2-13.pdf');
    }

    public function rep3_1()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-1');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-1.pdf');
    }

    public function rep3_2()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-2');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-2.pdf');
    }

    public function rep3_3()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-3');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-3.pdf');
    }

    public function rep3_4()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-4');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-4.pdf');
    }

    public function rep3_5()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-5');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-5.pdf');
    }
    
    public function rep3_6()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-6');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-6.pdf');
    }

    public function rep3_7()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-7');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-7.pdf');
    }

    public function rep3_8()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-8');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-8.pdf');
    }

    public function rep3_9()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-9');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-9.pdf');
    }

    public function rep3_10()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-10');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-10.pdf');
    }
    
    public function rep3_11()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-11');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-11.pdf');
    }
    public function rep3_12()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-12');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-12.pdf');
    }
    public function rep3_13()
    {
        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('reportes.rep3-13');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('rep3-13.pdf');
    }
}
