<?php

namespace App\Http\Controllers\Eventos;

use Illuminate\Http\File;
use App\Model\Eventos\Firma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Firma $model)
    {
         return view('firmas.index', ['datos' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Firma $model)
    {
        $nombreImagen = $request->file('imagen')->getClientOriginalName();
        $nombreImagen = \Str::random(3).$nombreImagen;
        $model->create(
            [
                'nombre' => $request->nombre,
                'area' => $request->area,
                'cargo' => $request->cargo,
                'imagen' => $nombreImagen,
            ]
        );

        Storage::putFileAs('public/firmas', new File($request->imagen), $nombreImagen);

        return redirect()->route('firmas')->withStatus(__('Firma creada con éxito.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Eventos\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function edit(Firma $firma)
    {
        return view('firmas.edit', compact('firma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Eventos\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firma $firma)
    {
        $firma->nombre = $request->nombre;
        $firma->area  = $request->area;
        $firma->cargo  = $request->cargo;

        if ($request->imagen) {
            $nombreImagen = $request->file('imagen')->getClientOriginalName();
            $nombreImagen = \Str::random(3).$nombreImagen;
            $firma->imagen  = $nombreImagen;
            Storage::putFileAs('public/firmas', new File($request->imagen), $nombreImagen);
        }

        $firma->save();
        return redirect()->route('firmas')->withStatus(__('Evento actualizado con éxito.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Eventos\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firma $firma)
    {
        //
    }
}
