<?php

namespace App\Http\Controllers;

use App\egresos;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class EgresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agregarEg');
    }

    public function listaEgresos(){
        $lista = DB::table('Egresos')->select('id', 'codigo','descripcion', 'egresos', 'created_at');
        return datatables()->of($lista)
            ->make(true);
    }

    public function agregarIn(Request $request){
        $egresos = new Egresos();
        $egresos->codigo=$request->input('codigo');
        $egresos->descripcion=$request->input('descripcion');
        $egresos->egresos=$request->input('egresos');
        $egresos->save();
        return view('agregarEg');
    }

    public function lista(){
        return view('listaEg');
    }
}
