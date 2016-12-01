<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Decree;
use App\Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $decreto = Decree::find($request->decree_id);
        $montoSuma = $decreto->details->sum('monto');
        $montoTotal = $decreto->montoTotal;
        $montoPartida = $request->monto;
        $montoProvicional = $montoSuma + $montoPartida;


        if($montoProvicional > $montoTotal):
            Alert::warning('La partida pasa el monto del decreto.', 'upps!');
            return Redirect::to('decrees/'.$request->decree_id);
        else:
            $partida = Detail::create([
                'decree_id' => $request->decree_id,
                'partida'   => $request->partida,
                'monto'     => $request->monto,
                'traslado'  => $request->traslado,
            ]);

            $decretoID = $request->decree_id;
            Alert::success('Partida ingresada exitosamente.', 'Exito!');
            return Redirect::to('decrees/'.$request->decree_id);
        endif;
/*        if($montoProvicional > $montoTotal):
           
            $partida = Detail::create([
                'decree_id' => $request->decree_id,
                'partida'   => $request->partida,
                'monto'     => $request->monto,
                'traslado'  => $request->traslado,
            ]);

            $decretoID = $request->decree_id;
            Alert::success('Partida ingresada exitosamente.', 'Exito!');
            return Redirect::to('decrees/'.$request->decree_id);

        else:
  
            $decretoID = $request->decree_id;
            Alert::warning('La partida pasa el monto del decreto.', 'upps!');
            return Redirect::to('decrees/'.$decretoID);

        endif;*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partida = Detail::find($id);
        return view('admin.details.edit', compact('partida'));
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
