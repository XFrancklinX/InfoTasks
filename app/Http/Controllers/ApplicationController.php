<?php

namespace App\Http\Controllers;

use App\Models\Examples;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{

    //Aprendizaje => Programacion INDEX
    public function LearnProg_index(){
        return view('aprendizaje.progra.index');
    }

    //Ejercicios => Programacion INDEX
    public function ExcProg_index()
    {
        $data = DB::table('examples')->get();

        $html = '';

        foreach ($data as $dat) {
            $html .= '
            <article class="data-example py-3">

                <div class="data-tittle py-3">
                    ' . $dat->titulo . '
                </div>

                <div class="data-details py-1">
                    <textarea class="areaDetail form-control" id="areaDetail" readonly>' . $dat->detalle . '</textarea>
                </div>

                <div class="data-code">
                    <span>Codigo:</span>
                    <code>
                        <pre class="px-3 py-3" readonly>' . $dat->code . '</pre>
                    </code>
                </div>
            </article>';
        }

        return view('ejercicios.progra.index')->with('html', $html);
    }

    //Contenido
    public function ContainOption(Request $request)
    {
        $lang = $request->input('datos');

        $data = DB::table('examples')->where('lenguaje', $lang)->get();

        $html = '';

        foreach ($data as $dat) {
            $html .= '
            <article class="data-example py-3">

                <div class="data-tittle py-3">
                    ' . $dat->titulo . '
                </div>

                <div class="data-details py-1">
                    <textarea class="areaDetail form-control" id="areaDetail"  readonly>' . $dat->detalle . '</textarea>
                </div>

                <div class="data-code">
                    <span>Codigo:</span>
                    <code>
                        <textarea class="px-3 py-3" readonly>' . $dat->code . '</textarea>
                    </code>
                </div>
            </article>';
        }

        return $html;
    }
}
