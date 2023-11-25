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
        return view('ejercicios.progra.index');
    }

    public function get_data_content(string $id){

        if($id == 1){
            $img = asset('images/icons/c-sharp-c.svg');
            return response()->json(['data_content' => view('includes.csharp')->render(), compact('img')]);
        }
        else if($id == 2){
            return response()->json(['data_content' => view('includes.python')->render()]);
        }
    }
}
