<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtroController extends Controller
{

    public function index()
    {
        /*Equivale a un SELECT **/
        $otro = DB::table('Otros')
            ->orderBy('nomOtro','asc')
            ->get();

        return view('Otro.inicio',[
            'otros'=>$otro]);
    }

    public function create()
    {
        return view('Otro.detalle');
    }

    public function store(Request $request)
    {
        // Equivale a un INSERT
        $otro = DB::table('Otros')->insert([
            'nomOtro' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'created_at' => $request->input('creado'),
            'updated_at' => $request->input('actualizado')
        ]);
        return redirect()->action([OtroController::class, 'index']);
    }

    public function show($id)
    {
        $otro = DB::table('Otros')
            ->where('idOtro','=',$id)
            ->first();

        return view('Otro.detalle',['otro' => $otro]);
    }

    public function update(Request $request)
    {
        $otro = DB::table('Otros')
            ->where('idOtro','=',$request->input('id'))
            ->update([
            'nomOtro' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'created_at' => $request->input('creado'),
            'updated_at' => $request->input('actualizado')
        ]);
        return redirect()->action([OtroController::class, 'index']);
    }


    public function destroy($id)
    {
        $otro = DB::table('Otros')
            ->where('idOtro','=',$id)
            ->delete();
        return redirect()->action([OtroController::class, 'index']);
    }
}
