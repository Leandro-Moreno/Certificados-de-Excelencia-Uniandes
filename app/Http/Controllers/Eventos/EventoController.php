<?php

namespace App\Http\Controllers\Eventos;

use Illuminate\Http\File;
use App\Model\Eventos\Firma;
use App\Model\Eventos\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\EventoRequest;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Evento $model)
    {
        return view('eventos.index', ['datos' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Firma $model)
    {
        return view('eventos.create', ['firmas' => $model->all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoRequest $request, Evento $model)
    {
        $model->create(
            [
                'estado' => $request->estado,
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'firma_id' => $request->firma,
                'firma2_id' => $request->firma2,
                'fecha' => $request->fecha,
                'fecha_final' => $request->fecha_final,
                'varios_horarios' => isset($request->varios_horarios)?$request->varios_horarios:0,
                'hora' => $request->hora,
            ]
        );

        return redirect()->route('eventos')->withStatus(__('Evento creado con éxito.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento, Firma $model)
    {
        return view('eventos.edit', compact('evento'), ['firmas' => $model->all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $evento->nombre = $request->nombre;
        $evento->estado = $request->estado;
        $evento->descripcion = $request->descripcion;
        $evento->firma_id = $request->firma;
        $evento->firma2_id = $request->firma2;
        $evento->varios_horarios = isset($request->varios_horarios)?$request->varios_horarios:0;
        $evento->fecha = $request->fecha;
        $evento->fecha_final = $request->fecha_final;
        $evento->hora = $request->hora;
        $evento->save();
        return redirect()->route('eventos')->withStatus(__('Evento actualizado con éxito.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        echo "En construcción";
    }
}
