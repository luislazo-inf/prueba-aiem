<?php

namespace App\Http\Controllers;

use App\Ingresos;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agregarIn');
    }

    public function listaIngresos(){
        $lista = DB::table('Ingresos')->select('id', 'codigo','descripcion', 'ingresos', 'created_at');
        return datatables()->of($lista)
            ->make(true);
    }

    public function agregarIn(Request $request){
        $ingresos = new Ingresos();
        $ingresos->codigo=$request->input('codigo');
        $ingresos->descripcion=$request->input('descripcion');
        $ingresos->ingresos=$request->input('ingresos');
        $ingresos->save();
        return view('agregarIn');
    }

    public function lista(){
        return view('listaIn');
    }
    
}
