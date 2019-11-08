<?php

namespace App\Model\Eventos;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'ev_eventos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'estado', 'nombre', 'descripcion', 'imagen', 'fecha', 'firma_id', 'hora'
    ];

    public function firma()
    {
        return $this->belongsTo('App\Model\Eventos\firma','firma_id');
    }
}
