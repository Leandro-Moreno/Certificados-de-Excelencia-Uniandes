<?php

namespace App\Http\Controllers;

use App\Correo;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correo = Correo::first();
        return view('correo.index', compact('correo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Correo  $correo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Correo $correo)
    {
      $correo->host = $request->host;
      $correo->driver = $request->driver;
      $correo->port = $request->port;
      $correo->encryption = $request->encryption;
      $correo->username = $request->username;
      $correo->password  = $request->password ;
      $correo->address = $request->address;
      $correo->name = $request->name;
      $correo->save();
      return redirect()->route('correo')->withStatus(__('Usuario actualizado con éxito.'));
    }

}
