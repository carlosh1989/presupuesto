<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Decree;
use App\Departure;
use App\Dependency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DecreesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decretos = Decree::all();
        return view('admin.decrees.all', compact('decretos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependencias = Dependency::all();
        $partidas = Departure::all();
        return view('admin.decrees.create', compact('dependencias','partidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $montoTotal = str_replace('.', '', $request->montoTotal); 
        $montoTotal = str_replace(',', '.', $montoTotal); 
        $decreto = Decree::create([
            'numero' => $request->numeroDecreto,
            'fecha' => $request->fecha,
            'tipoMovimiento' => 'Traslado de partida',
            'descripcion' => $request->descripcion,
            'observaciones' => '',
            'montoTotal' => $montoTotal,
            'estado' => 1,
        ]);

        Alert::success('Decreto ingresado exitosamente.', 'Exito!');
        return Redirect::to('decrees/'.$decreto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decreto = Decree::find($id);
        return view('admin.decrees.show', compact('decreto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
