<?php

namespace App;
Use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table="lugar";

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }
}

?>