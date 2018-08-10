<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugar";

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function creador()
    {
        return $this->belongsTo('App\User', 'creador_id');
    }
}
