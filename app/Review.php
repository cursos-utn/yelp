<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table="review";

    public function lugar()
    {
        return $this->belongsTo('App\Lugar');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User', 'creador_id');
    }
}
